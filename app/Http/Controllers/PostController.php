<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;
// use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Auth;
use File;
use URL;

use App\Category;
use App\Subcategory;
use App\Tag;
use App\User;
use App\Post;
use App\ActionType;
use App\Log;
use App\Saved_post;
use App\Reminder;
use App\Menu;


use App\Http\Traits\LoggingTrait;
use App\Http\Traits\SlugTrait;
use App\Http\Traits\ViewCounterTrait;

class PostController extends Controller
{
  use LoggingTrait;
  use SlugTrait;
  use ViewCounterTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);

    $this->middleware('checkRole:admin,moderator')->only('waitList','approvedList','refusedList');
    $this->middleware('checkRole:company')->only('addPost');
    $this->middleware('CheckEditPrivilege')->only('editPost');
  }

  public function addPost(){
    $categories = Category::get();
    $tags = Tag::get();
    return view('posts.add',compact('categories','tags'));
  }


  public function storePost(Request $request){
    $this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:50',
			'photo' => 'required|mimes:jpeg,bmp,png|max:2000',
      'language' => 'required',
			'category' => 'required',
			'tags' => 'required|min:1|max:5',
      'deadline' => 'after:today'
		]);

    // Photo
    $photo = $request->file('photo');
    $targetLocation = base_path().'/public/assets/postPhotos/';
    $targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();
    $x = $request->input('x');
    $y = $request->input('y');
    $w = $request->input('w');
    $h = $request->input('h');
    $photo = Image::make($photo->getRealPath())->crop($w,$h,$x,$y)->save($targetLocation.$targetName);
    $photoPath = $targetName;

    if(substr($request->input('category'),0,1) == 'c'){
      // Then this category has no sub
      $category_id = substr($request->input('category'),1);
      $subcategory_id = '0';
    }else{
      $category_id = Subcategory::where('id',$request->input('category'))->value('category_id');
      $subcategory_id = $request->input('category');
    }

    $currentPostID = Post::insertGetId([
			'title' => $request->input('title'),
			'body' => $request->input('body'),
      'deadline' => str_replace('T',' ',$request->input('deadline')),
      'company_id' => 1,
      'image' => $photoPath,
      'lang' => $request->input('language'),
      'slug' => $this->slugCreator($request->input('title'),'post'),
      'category_id' => $category_id,
      'subcategory_id' => $subcategory_id,
      'company_id' => $this->user->company->id,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
			]);

    // Tags
    foreach($request->input('tags') as $tag){
      DB::table('post_tag')->insert([
        'post_id' => $currentPostID,
        'tag_id' => $tag,
        'created_at' => Carbon::now(),
      ]);
    }

    //Logging
    $this->log(3,$currentPostID,'posts');
  }

  // EDITING

  public function editPost(Post $post){

    $categories = Category::get();
    $tags = Tag::get();

    if($post->deadline != '0000-00-00 00:00:00')
      $deadline = substr(str_replace(' ','T',$post->deadline),0,16); // Because html uses different style of string for datetime than mysql
    else
      $deadline = null;

    return view('posts.edit',compact('categories','tags','post','deadline'));
  }

  public function updatePost(Post $post,Request $request){
    $this->validate($request,[
			'title' => 'required|min:10|max:150',
			'body' => 'required|min:50',
			'photo' => 'mimes:jpeg,bmp,png|max:2000',
      'language' => 'required',
			'category' => 'required',
			'tags' => 'required|min:1|max:5',
      'deadline' => 'after:today'
		]);

    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->deadline = strtotime( str_replace('T',' ',$request->input('deadline')) );
    $post->lang = $request->input('language');
    $post->refused = 0;

    if(substr($request->input('category'),0,1) == 'c'){
      // Then it is category without sub
      $post->category_id = substr($request->input('category'),1);
      $post->subcategory_id = '0';
    }else{
      $post->category_id = Subcategory::where('id',$request->input('category'))->value('category_id');
      $post->subcategory_id = $request->input('category');
    }

    // Photo
    if($request->file('photo')){
      unlink( base_path().'/public/assets/postPhotos/'.$post->image );

      $photo = $request->file('photo');
      $targetLocation = base_path().'/public/assets/postPhotos/';
      $targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();

      $x = $request->input('x');
      $y = $request->input('y');
      $w = $request->input('w');
      $h = $request->input('h');
      $photo = Image::make($photo->getRealPath())->crop($w,$h,$x,$y)->save($targetLocation.$targetName);

      $post->image = $targetName;
    }

    $post->save();

    // Tags
    DB::table('post_tag')->where('post_id','=',$post->id)->delete();
    $tags = $request->tags;
    foreach($tags as $tag){
      DB::table('post_tag')->insert([
        'post_id' => $post->id,
        'tag_id' => $tag,
        'created_at' => Carbon::now(),
      ]);
    }

    //Logging
    $this->log(15,$post->id,'posts');
  }

  public function View(Request $request,$slug){

    $post=Post::where('slug','=',$slug)->first();
    if($post == null){
      return "Post doesn't exist";
    }

    // Company IS NOT approved -> then only owner sees the post
    // Company is approved, post IS NOT approved -> owner,admin,moderator see the post
    // Company is approved, post is approved -> everybody sees

    if($post->company->approved){
      if(!$post->approved){
        if(Auth::check() && ( ($this->user->user_type == 'admin' || $this->user->user_type == 'moderator') || ($this->user->user_type == 'company' && $this->user->company->id == $post->company_id) ) ){
          // Admin,moderator,owner will see the post
        }else{
          return 404;
        }
      }
    }else{
      if(Auth::check() && $this->user->user_type == 'company' && $this->user->company->id == $post->company_id){
        // Owner will see the post
      }else{
        return 404;
      }
    }

    $OtherPosts=Post::orderBy('id', 'desc')
                      ->where([
                        ['category_id', '=', $post->category_id],
                        ['subcategory_id', '=', $post->subcategory_id],
                        ['approved', '=', '1'],
                        ['id','!=',$post->id]
                        ])
                      ->limit(3)
                      ->get();



    if(!empty($this->user) && $this->user->user_type=="user"){
      //Logging
      // if(URL::previous()!="http://localhost:8000/post/".$slug){
      //   $this->log(1,$post->id,'posts');
      // }

      //Post saved or not
      $isSaved=Saved_post::where([
        ['user_id', '=', $this->user->id],
        ['post_id', '=', $post->id],
      ])
      ->first();

      //Reminder added or not
      $isReminderAdded=Reminder::where([
        ['user_id', '=', $this->user->id],
        ['post_id', '=', $post->id],
      ])
      ->first();
    }

    // if(URL::previous()!="http://localhost:8000/post/".$slug){
    //   $post->update([
    //     'view' => $post->view+1,
    //   ]);
    // }

    // $this->incrementView($request,$post);

    return view('post', compact('post','OtherPosts','isSaved','isReminderAdded'));
  }

  public function waitList(){
    $posts = Post::where('approved',0)->where('refused',0)->get();
    $title = "Approval Pending Posts";
    return view('adminPanel.posts',compact('posts','title'));
  }

  public function approvedList(){
    $posts = Post::where('approved',1)->get();
    $title = "Approved Posts";
    return view('adminPanel.posts',compact('posts','title'));
  }

  public function refusedList(){
    if($this->user->user_type == 'admin'){ // Return all refused posts
      $posts = Post::where('approved',0)->where('refused',1)->get();
    }else if($this->user->user_type == 'moderator'){
      $posts = Post::where('moderator_id',$this->user->id)->where('approved',0)->where('refused',1)->get();
    }
    $title = "Refused Posts";
    return view('adminPanel.posts',compact('posts','title'));
  }

  public function approvePost(Post $post){
    $post->approved = 1;
    $post->refused = 0;
    $post->moderator_id = $this->user->id;
    $post->refuse_reason = null;
    $post->save();

    $this->log(5,$post->id,'posts'); // Approve

    return back();
  }

  public function refusePost(Post $post,Request $request){
    $post->approved = 0;
    $post->refused = 1;
    $post->moderator_id = $this->user->id;
    $post->refuse_reason = $request->input('refuse_reason');

    $post->save();

    $this->log(6,$post->id,'posts'); // Refuse

    return back();
  }

  public function deletePost(Post $post){
    $post->delete();
    Reminder::where('post_id',$post->id)->delete();
    return redirect('/');
  }

  public function restorePost(Post $post){
    $post->restore();
    Reminder::onlyTrashed()->where('post_id',$post->id)->restore();
    return redirect('/post/'.$post->slug);
  }
}

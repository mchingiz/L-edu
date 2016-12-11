<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Auth;
use File;

use App\Category;
use App\Subcategory;
use App\Tag;
use App\User;
use App\Post;
use App\ActionType;
use App\Log;

use App\Http\Traits\LoggingTrait;

class PostController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
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
    $photo->move($targetLocation, $targetName);
    $photoPath = $targetName;

    if(substr($request->input('category'),0,1) == 'c'){
      // Then this category has no sub
      $category_id = substr($request->input('category'),1);
      $subcategory_id = '0';
    }else{
      $category_id = Subcategory::where('id',$request->input('category'))->value('category_id');
      $subcategory_id = $request->input('category');
    }

    Post::create([
			'title' => $request->input('title'),
			'body' => $request->input('body'),
      'deadline' => str_replace('T',' ',$request->input('deadline')),
      'company_id' => 1,
      'image' => $photoPath,
      'lang' => $request->input('language'),
      'slug' => $this->slugCreator( $request->input('title') ),
      'category_id' => $category_id,
      'subcategory_id' => $subcategory_id,
      'company_id' => $this->user->company->id,
			]);

    // Tags
    $currentPostID = Post::orderBy('id', 'desc')->first()->id;
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
    $post->deadline = str_replace('T',' ',$request->input('deadline'));
    $post->lang = $request->input('language');

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
      unlink( base_path().'\public'.$post->image );
      $photo = $request->file('photo');
      $targetLocation = base_path().'/public/assets/postPhotos/';
      $targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();
      $photo->move($targetLocation, $targetName);
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
    $this->log(14,$post->id,'posts');
  }

  public function View($slug){
    $post=Post::where('slug','=',$slug)->limit(1)->get();
    $post=$post[0];
    return view('post',compact('post'));
  }

  public function slugCreator($title){
    $title = str_ireplace(' ','-',$title);
    $title = str_ireplace('ə','e',$title);
    $title = str_ireplace('ü','u',$title);
    $title = str_ireplace('ş','s',$title);
    $title = str_ireplace('ç','c',$title);
    $title = str_ireplace('ı','i',$title);
    $title = str_ireplace('ö','o',$title);
    return $title;
  }
}

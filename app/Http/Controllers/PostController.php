<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Auth;

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
    view()->share('user', $this->user);
  }

  public function addPost(){
    $categories = Category::get();
    $tags = Tag::get();
    return view('posts.add',compact('categories','tags'));
  }


  public function storePost(Request $request){
    // $this->validate($request,[
		// 	'title' => 'required|min:10|max:150',
		// 	'body' => 'required|min:50',
		// 	'photo' => 'required|mimes:jpeg,bmp,png|max:2000',
		// 	'category' => 'required',
		// 	'tags' => 'required|min:1|max:5'
		// ]);

    $title = $request->input('title');
    $body = $request->input('body');
    $subcategory_id = $request->input('category');
    $tags = $request->tags;
    $category_id = Subcategory::where('id',$subcategory_id)->value('category_id');
    $deadline = str_replace('T',' ',$request->input('deadline'));

    // Photo
    $photo = $request->file('photo');
    $targetLocation = base_path().'/public/assets/postPhotos/';
    $targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();
    $photo->move($targetLocation, $targetName);
    $photoPath = '/assets/postPhotos/'.$targetName;

    Post::create([
			'title' => $title,
			'body' => $body,
      'deadline' => $deadline,
      'company_id' => 1,
      'image' => $photoPath,
      'category_id' => $category_id,
      'subcategory_id' => $subcategory_id,
      'published' => 1,
      'company_id' => $this->user->company->id,
			]);

    // Tags
    $currentPostID = Post::orderBy('id', 'desc')->first()->id;
    foreach($tags as $tag){
      DB::table('post_tag')->insert([
        'post_id' => $currentPostID,
        'tag_id' => $tag,
        'created_at' => Carbon::now(),
      ]);
    }

    //Logging
    $this->log(3,$currentPostID,'posts');
  }

  public function View($slug){

    $post=Post::where('slug','=',$slug)->first();
    if($post->approved==0 || $post->deleted==1)
      return 404;

    $OtherPosts=Post::orderBy('id', 'desc')
                      ->where([
                        ['category_id', '=', $post->category_id],
                        ['subcategory_id', '=', $post->subcategory_id],
                        ['approved', '=', '1'],
                        ['id','!=',$post->id]
                        ])
                      ->limit(3)
                      ->get();


    //Logging
    if(!empty($this->user) && $this->user->user_type=="user")
      $this->log(1,$post->id,'posts');


    $post->update([
        'view' => $post->view+1,
    ]);

    return view('post', compact('post','OtherPosts'));
  }

  public function savePost($id){

    DB::table('saved_posts')
            ->insert([
              'user_id' => $this->user->id,
              'post_id' => $id,
              'created_at'=>Carbon::now()
              ]);

      return 55;
  }
}

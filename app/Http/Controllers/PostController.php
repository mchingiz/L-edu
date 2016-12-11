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

    $title = $request->input('title');
    $body = $request->input('body');
    $tags = $request->tags;
    $subcategory_id = $request->input('category');
    $category_id = Subcategory::where('id',$subcategory_id)->value('category_id');
    $deadline = str_replace('T',' ',$request->input('deadline'));

    // Photo
    $photo = $request->file('photo');
    $targetLocation = base_path().'/public/assets/postPhotos/';
    $targetName=microtime(true)*10000 . '.' . $photo->getClientOriginalExtension();
    $photo->move($targetLocation, $targetName);
    $photoPath = $targetName;

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
			'category' => 'required',
			'tags' => 'required|min:1|max:5',
      'deadline' => 'after:today'
		]);

    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->subcategory_id = $request->input('category');
    $post->category_id = Subcategory::where('id',$request->input('category'))->value('category_id');
    $post->deadline = str_replace('T',' ',$request->input('deadline'));

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
}

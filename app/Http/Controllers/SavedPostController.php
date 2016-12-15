<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Auth;

use App\Post;
use App\Log;
use App\Company;
use App\Saved_post;


use App\Http\Traits\LoggingTrait;
class SavedPostController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  }

  public function SavePost($id){
    $this->log(8,$id,'posts');

    $savepost=Saved_Post::create([
      'user_id' => $this->user->id,
      'post_id' => $id,
      ]);

      return $savepost->id;
  }

  public function UnSavePost(Saved_Post $saved_post){
    $this->log(9,$saved_post->post_id,'posts');
    $post_id=$saved_post->post_id;
    $saved_post->delete();

      return $post_id ;
  }

  public function view(){
    $countPosts= Saved_Post::where('user_id','=',$this->user->id)->count();
    $numberOfCompanies= ceil($countPosts/2)*2; //There are 2 post each row, 1 row height=2 company height
    if($numberOfCompanies<5)
        $numberOfCompanies=5;// minimum number is 5
    $companies=Company::inRandomOrder()->limit($numberOfCompanies)->get();
    return view('savedposts',compact ('companies'));
  }
}

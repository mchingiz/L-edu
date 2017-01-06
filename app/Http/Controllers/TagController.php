<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Auth;


use App\Http\Traits\LoggingTrait;
class TagController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  } 

  public function View($slug){
  	$tag=Tag::where('slug','=',$slug)->first();

  	//Logging
  	$this->log(1,$tag->id,'tags');
  	return view('tags',compact('tag'));

  }
}

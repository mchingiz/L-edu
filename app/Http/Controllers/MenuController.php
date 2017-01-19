<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
use Auth;


use App\Http\Traits\LoggingTrait;
class MenuController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  } 

  public function View($slug){
    $menu=Menu::where('slug','=',$slug)->first();
    $category=$menu->category;
    //Logging
    $this->log(1,$category->id,'categories');

    return view('category',compact('category'));

  }

}

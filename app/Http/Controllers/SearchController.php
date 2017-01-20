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
use App\User;

use App\Http\Traits\LoggingTrait;
class SearchController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  }
 
  public function view(Request $request){
   $search_key= $request->key;
   $companies= User::where([
                    ['user_type', '=', 'company'],
                    ['name', 'LIKE', '%'.$search_key.'%']
                    ])
                    ->get();
    $posts=POST::where([
                    ['approved', '=', '1'],
                    ['title', 'LIKE', '%'.$search_key.'%']
                    ])
    	->orWhere([
                    ['approved', '=', '1'],
                    ['body', 'LIKE', '%'.$search_key.'%']
                    ])
    	->get();

    return view('search',compact ('search_key','posts','companies'));


  }
}

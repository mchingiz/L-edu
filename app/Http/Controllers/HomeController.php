<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Carbon\Carbon;
use DB;
use Auth;
use File;
use URL;

use App\Category;
use App\Subcategory;
use App\Tag;
use App\User;
use App\Company;
use App\Post;
use App\ActionType;
use App\Log;
use App\Saved_post;
use App\Reminder;
use App\Menu;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkRole:admin,moderator')->only('adminPanel');
    }

    public function index()
    {
      return view('home');
    }

    public function adminPanel(){
      $count = array(
        "post" => Post::where('approved',1)->count(),
        "user" => User::where('user_type','user')->count(),
        "company" => Company::where('approved',1)->count(),
        "postView" => Log::where('action_type_id',1)->count(),
      );

      return view('adminPanel.dashboard',compact('count'));
    }
}

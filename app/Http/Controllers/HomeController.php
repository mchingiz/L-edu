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
        $this->middleware('auth')->only('adminPanel');
        $this->middleware('checkRole:admin,moderator')->only('adminPanel');
    }

    public function index()
    {
      //Companies
      $allCompanies = Company::where('approved',1)->get();
      if( Company::where('approved',1)->count() > 5 ){
        $randomCompanies = $allCompanies->random(5);
      }else{
        $randomCompanies = $allCompanies;
      }

      // Posts

      $latestPosts = Post::where('approved',1)->take(5)->get();
      $eventPosts = Post::where('category_id',2)->where('approved',1)->get();
      $vacancyPosts = Post::where('category_id',1)->where('approved',1)->get();
      $scholarshipPosts = Post::where('category_id',3)->where('approved',1)->get();
      $grantPosts = Post::where('category_id',4)->where('approved',1)->get();

      $allPosts = collect([$latestPosts,$eventPosts,$vacancyPosts,$scholarshipPosts,$grantPosts]);

      foreach($allPosts as $oneCategoryPosts){
        foreach($oneCategoryPosts as $post){
          // ***Formatting the deadline
            $post->deadlineString = Carbon::createFromFormat('Y-m-d H:i:s', $post->deadline)->toFormattedDateString();

          // ***Manipulation body of post for homepage
            // Delete html tags from text
            $str = strip_tags($post->body);
            // Wrap texts to seperate lines w/o breaking words, explode to array, then take first line
            $characterLimit = 80;
            $str = explode("\n", wordwrap($post->body, $characterLimit))[0];
            // Delete non-alphanumeric characters from end of the string
            $post->body = preg_replace('/[^a-z0-9]+\Z/i', '', $str).'...';
        }
      }

      $latestPosts = $allPosts[0];
      $eventPosts = $allPosts[1];
      $vacancyPosts = $allPosts[2];
      $scholarshipPosts = $allPosts[3];
      $grantPosts = $allPosts[4];
      $mostViewed = Post::where('approved',1)->orderBy('view')->take(8)->get();

      return view('index',compact('vacancyPosts','eventPosts','scholarshipPosts','grantPosts','latestPosts','mostViewed','randomCompanies'));
    }

    public function adminPanel(){
      $count = array(
        "post" => Post::where('approved',1)->count(),
        "user" => User::where('user_type','user')->count(),
        "company" => Company::where('approved',1)->count(),
        "postView" => Post::sum('view'),
      );

      return view('adminPanel.dashboard',compact('count'));
    }
}

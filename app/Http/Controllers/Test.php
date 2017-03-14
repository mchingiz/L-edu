<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Company;
use App\Post;
use App\Category;
use App\Subcategory;
use App\Tag;
use App\Reminder;
use App\Saved_post;
use App\Report;
use App\ReportType;
use App\Log;
use App\LogType;
use App\Menu;
use App\Search;
use URL;
use DB;

class Test extends Controller
{
  public function test(){
  	DB::enableQueryLog();
  	echo "<hr>";

  	$user=DB::table('users')
            ->join('companies', 'users.id', '=', 'companies.user_id')->inRandomOrder()->get();
    var_dump(DB::getQueryLog());
    echo "<hr>";

  	var_dump($user);
  public function test(Post $post){

  }

  public function mail(){
        Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message){
        	$message->to('memmedlicngz@gmail.com');
        });
    }
}

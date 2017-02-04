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
use App\Reminder;


use App\Http\Traits\LoggingTrait;
class ReminderController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  }

  public function AddReminder($id,Request $request){
    $request->datetime=$request->datetime.":00";
    $this->validate($request,[
      'datetime' => 'after:today'
    ]);

    $reminder=Reminder::create([
      'user_id' => $this->user->id,
      'post_id' => $id,
      'reminder_time'=> $request->datetime,
    ]);

    $this->log(14,$id,'posts');

    return 0;


  }

  public function DeleteReminder(Reminder $reminder){
    
    $this->log(16,$reminder->post_id,'posts');
    $reminder->delete();
    return 0;

  }

  public function View(){
    $countPosts= Reminder::where('user_id','=',$this->user->id)->count();
    $numberOfCompanies= ceil($countPosts/2)*2; //There are 2 post each row, 1 row height=2 company height
    if($numberOfCompanies<5)
        $numberOfCompanies=5;// minimum number is 5
    $companies=Company::inRandomOrder()->limit($numberOfCompanies)->get();
    return view('reminders',compact ('companies','countPosts'));
  }



}

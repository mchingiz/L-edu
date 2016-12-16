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

    $this->validate($request,[
      'datetime' => 'after:today'
    ]);

    $reminder=Reminder::create([
      'user_id' => $this->user->id,
      'post_id' => $id,
      'reminder_time'=> $request->datetime,
    ]);

    return 5;

  }

}

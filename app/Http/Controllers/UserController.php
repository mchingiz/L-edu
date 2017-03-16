<?php

namespace App\Http\Controllers;

use App\ActivationService;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Validator;
use App\User;
use App\Post;
use App\Company;
use App\Reminder;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

  public function __construct(){
    $this->user = Auth::user();

    $this->middleware('checkRole:admin,moderator')->only('userList','companyList','companyWaitList');
  }
  public function userList(){
    $users = User::where('user_type','!=','company')->get();
    return view('adminPanel.users',compact('users'));
  }

  public function companyList(){
    $companies = Company::where('approved',1)->get();
    return view('adminPanel.companies',compact('companies'));
  }

  public function companyWaitList(){
    $companies = Company::where('approved',0)->get();
    return view('adminPanel.companies',compact('companies'));
  }

  public function DeactivateAccount(){
    if($this->user->user_type=="user"){
      $this->DeactivateUser();
    }

    if($this->user->user_type=="company"){

      $this->DeactivateCompany();
    }
      return redirect('/');

  }

  private function DeactivateUser()
  {
    $this->user->delete();
  }

  public function DeactivateCompany(){
    $company=$this->user->company;
    $posts=$company->posts;

    foreach ($posts as $post)  {
      foreach ($post->reminders as $reminder) {
        $reminder->delete();
      }
      $post->delete();
    }

    $company->delete();
    $this->user->delete();

  }

    public function ActivateCompany(User $user){
      $company=Company::withTrashed()->where('user_id','=',$user->id)->first();
      $posts= Post::withTrashed()
             ->where([
                        ['company_id', '=', $company->id],
                        ['recoverable','=','1']
                        ])
              ->get();

      foreach ($posts as $post)  {
      $reminders=Reminder::withTrashed()->where('post_id','=',$post->id)->get();
      foreach ($reminders as $reminder) {
        $reminder->restore();
      }

        $post->restore();

    }

    $company->restore();

    }




}

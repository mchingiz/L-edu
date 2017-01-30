<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests;
use Validator;
use App\User;
use App\Company;
use Auth;

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
      DeactivateUser();
    }

    if($this->user->user_type=="company"){
      
      DeactivateCompany();
    }
      
      return redirect('/index');
    
  }

  private function DeactivateUser(){
    $this->user->delete();
  }

  private function DeactivateCompany(){
    $company=$this->user->company;
    $posts= $company->posts;
      
    foreach ($posts as $post)  {
      foreach ($post->reminders as $reminder) {
        $reminder->delete();
      }
      $post->delete();
    }

    $company->delete();
    $this->user->delete();
  }

  public function Activate(){

  }


    public function LoginByAjax(Request $request)
    {   
        $email = $request->email;
        $password = $request->password;
        
        //validation: non-empty password and email
        $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password'=>'required'
        ]);

        if ($validator->fails()) {
          return response([
              'success' => false,
              'message' => "Email and password fields are required."
            ],422);
            
        } 

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
          return response([
              'success' => true,
              ]);
        }
        //If Auth attempt fails:
        else {
          return response([
              'success' => false,
              'message' => "Wrong username and password combination."
            ],422);
        }
      
    }

}

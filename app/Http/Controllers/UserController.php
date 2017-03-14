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

  public function Login(Request $request){
      $email = $request->email;
      $password=$request->password;
      $remember=$require->remember;

      //Validation
      //validation: non-empty password and email
        $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password'=>'required'
        ]);

        
        if ($validator->fails()) {
          return  back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'Email and password fields are required.',
                ]);

        }

    $attempt=$this->LoginAttempt($email,$password);
      

    if(! $attempt)
    {   
        return  back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'Wrong username and password combination.',
                ]);
    }

    return redirect('/'); // true
  }

  public function LoginAttempt($email,$password, $remember){
    $user= User::withTrashed()
             ->where([
                        ['email', '=', $email],
                        ])
              ->first();
      if(!empty($user) && Hash::check($password, $user->password) && !empty($user->deleted_at)){
         $user->restore();

         if($user->user_type=="company"){
            $this->ActivateCompany($user);
         }
      }
      
      return $attempt = Auth::attempt(['email' => $email, 'password' => $password], $remember);

  }


    public function LoginByAjax(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $remember=$require->remember;

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
        $attempt=$this->LoginAttempt($email,$password);

        if (!$attempt) {
          return response([
              'success' => false,
              'message' => "Wrong username and password combination."
            ],422);

        }
        
        return response([
          'success' => true,
        ]);
        

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

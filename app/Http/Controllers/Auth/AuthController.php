<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use URL;

use App\Http\Traits\SlugTrait;

class AuthController extends Controller
{
    use SlugTrait;

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';
    protected $redirectAfterLogout = '/index';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      if( URL::previous() == "http://localhost:8000/register/company"){
        $type="company";
      }
      if(URL::previous() =="http://localhost:8000/register/user"){
        $type="user";
      }

        $user=User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'user_type'=> $type,
              'password' => bcrypt($data['password']),
            ]);
        if($type=="company"){
          Company::create([
            'user_id' => $user->id,
            'slug' => $this->slugCreator($data['name']),
          ]);
        }

        return $user;
    }

    public function registerForm(){
      return view('auth/registerform');
    }
}

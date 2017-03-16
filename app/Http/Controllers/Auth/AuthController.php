<?php

namespace App\Http\Controllers\Auth;

use Mail;

use App\User;
use App\Company;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use URL;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\ActivationService;

use App\Http\Traits\SlugTrait;

use Auth;
use Socialite;

class AuthController extends Controller
{
    use SlugTrait;
    protected $activationService;

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
    protected $redirectTo ='/';
    protected $redirectAfterLogout = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    // }

    //Overrided function
    public function __construct(ActivationService $activationService){
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->activationService = $activationService;
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

    private function findOrCreateUser($socialUser,$driverName)
    {
        $authUser = User::where($driverName.'_id', $socialUser->id)->first();

        if ($authUser){ // Logged in before by using this provider
            return $authUser;
        }

        $userWithSameEmail = User::where('email', $socialUser->email)->first();

        if($userWithSameEmail){ // Logged in before using another provider
            return $userWithSameEmail;
        }

        return User::create([ // Not logged in, create new user
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            $driverName.'_id' => $socialUser->id,
            'user_type' => 'user',
            'activated' => true
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
            'slug' => $this->slugCreator($data['name'],'company'),
            'logo'=>'default.png',
            'cover_photo'=>'default1.jpg'
          ]);
        }


        // return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');

        return $user;
    }

    public function registerForm(){
        return view('auth/registerform');
    }

    // Overriding default register function
    // vendor/laravel/framework/src/Illuminate/Foundation/Auth/RegistersUsers.php
    public function register(Request $request){
        $validator = $this->validator($request->all());

        Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message){
        	$message->to('memmedlicngz@gmail.com');
        });

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        // Auth::guard($this->getGuard())->login($this->create($request->all()));

        return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
    }


    public function Login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

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


    $attempt=$this->LoginAttempt($email,$password,$remember);

    if(! $attempt)
    {
        return  back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'Wrong username and password combination.',
                ]);
    }

    return $this->activatedOrNot($request,Auth::user());

    // return redirect('/'); // true
  }

    public function activatedOrNot(Request $request, User $user){
        // return 'activatedOrNot';

        if (!$user->activated) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return redirect('/login')->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }

        // return redirect()->intended($this->redirectPath());
        // return 'activated';

        return redirect('/');
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
        $remember=$request->remember;

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
        $attempt=$this->LoginAttempt($email,$password,$request);

        if (!$attempt) {
          return response([
              'success' => false,
              'message' => "Wrong username and password combination."
            ],422);

        }

        return $this->activatedOrNot($request,Auth::user());

        return response([
          'success' => true,
        ]);
    }

    // Social Logins

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){

        try {
          $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
          return redirect('/');
        }

        $authUser = $this->findOrCreateUser($user,'facebook');

        Auth::login($authUser, true);

        return redirect('/');
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){

        try {
          $user = Socialite::driver('google')->user();
        } catch (Exception $e) {
          return redirect('/');
        }

        // dd($user->id);

        $authUser = $this->findOrCreateUser($user,'google');

        Auth::login($authUser, true);

        return redirect('/');
    }
}

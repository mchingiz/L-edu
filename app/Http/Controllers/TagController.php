<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Auth;
use Validator;


use App\Http\Traits\LoggingTrait;
class TagController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  } 

  public function View($slug){
  	$tag=Tag::where('slug','=',$slug)->first();

  	//Logging
  	$this->log(1,$tag->id,'tags');
  	return view('tags',compact('tag'));

  }



public function postUserLogin(Request $request) {
  if(isEmpty( $request->password))
    {return 0;}
  else{
    return 1;
  }
    $credentials = array_trim($request->only('email', 'password'));
    $rules = ['email' => 'required|email|max:255',
        'password' => 'required'
    ];

    $validation = Validator::make($credentials, $rules);
    $errors = $validation->errors();
    $errors = json_decode($errors);
    if ($validation->passes()) {
        if (Auth::attempt(['email' => trim($request->email),
                    'password' => $request->password,
                        ], $request->has('remember'))) {


            return response()->json(['redirect' => true, 'success' => true, 'message'=> "helloajax"], 200);
        } else {
            $message = 'Invalid username or password';

            return response()->json(['password' => $message], 422);
        }
    } else {
        return response()->json($errors, 422);
    }
}
}

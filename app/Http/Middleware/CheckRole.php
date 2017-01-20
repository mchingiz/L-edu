<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  // public function handle($request, Closure $next,$role)
  // {
  //   var_dump $user;
  //
  //   if($user->user_type == $role){
  //     return $next($request);
  //   }
  //
  //   $error = "Sorry, we can't let you see this page :(";
  //   return view('errors.error','error');
  // }

  public function handle($request, Closure $next, ...$roles)
  {
    // dd(Auth::user()->user_type);

    if(Auth::check()){
      if( collect($roles)->contains(Auth::user()->user_type) ){
        return $next($request);
      }

      $error = "Sorry, we can't let you see this page :(";
    }else{
      $error = "Sorry, we would like to show you this page, but you need to log in :(";
    }

    return view('errors.error',compact('error'));
  }
}

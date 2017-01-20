<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Post;
use App\User;

class CheckEditPrivilege
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $post = $request->route('post');

      if(Auth::check()){
        $user = Auth::user();
        if($user->user_type == 'admin' || $user->user_type == 'moderator' || $user->company->id == $post->company_id){
          return $next($request);
        }
        $error = "Sorry, but this post belongs to someone else :(";
      }else{
        $error = "Sorry, we would like to show you this page, but you need to log in :(";
      }

      return view('errors.error',compact('error'));
    }
}

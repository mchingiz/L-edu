<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Company;

class Test extends Controller
{
  public function test(User $user){
    return $user->company;
  }
}

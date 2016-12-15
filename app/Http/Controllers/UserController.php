<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Company;

class UserController extends Controller
{
  public function userList(){
    $users = User::where('user_type','!=','company')->get();
    return view('adminPanel.users',compact('users'));
  }

  public function companyList(){
    $companies = Company::where('approved','==',1)->get();
    return view('adminPanel.companies',compact('companies'));
  }

  public function companyWaitList(){
    $companies = Company::where('approved','==',0)->get();
    return view('adminPanel.companies',compact('companies'));
  }
}

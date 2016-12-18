<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Company;

class CompanyController extends Controller
{
  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  }

  public function EditProfile(){
    return view('editProfile');
  }

  public function Update(Request $request){
    $user=$this->user;
    $company = $user->company;

    $this->validate($request, [
        'name' => 'required|max:50',
        'logo'   =>  'mimes:jpeg,jpg,png',
        'facebook'   => 'active_url',
        'instagram'   => 'active_url',
        'linkedin'   => 'active_url',
        'website'   => 'active_url'
    ]);

    $user->update([
      'name'=>$request->name
    ]);

     $company->update([
        'info' => $request->info,
        'address' => $request->address,
        'fax' => $request->fax,
        'phone1' => $request->phone,
        'phone2' => $request->phone2,
        'facebook' => $request->facebook,
        'instagram' => $request->instagram,
        'linkedin' => $request->linkedin,
        'website' => $request->website,
        'email' => $request->email,
     ]);


    return redirect()->back();
  }

  public function approveCompany(){

  }

  public function ViewInfo( $slug){
    $company=Company::where('slug','=',$slug)->first();
    return view('companyinfo',compact('company'));
  }
  public function ViewPosts( $slug){
    $company=Company::where('slug','=',$slug)->first();
    return view('companyposts',compact('company'));
  }
}

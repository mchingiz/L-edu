<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Company;
use DB;
use URL;

use App\Http\Traits\LoggingTrait;
class CompanyController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);

    $this->middleware('checkRole:company')->only('EditProfile');
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

    if(!empty($this->user) && $this->user->user_type=="user"){
      //Logging
      if(URL::previous()!="http://localhost:8000/company/".$slug."/info"){
        $this->log(1,$company->id,'companies');
      }

      //User follow this company or not
      $isFollowed=DB::table('followers')->where([
        ['user_id', '=', $this->user->id],
        ['company_id', '=', $company->id],
      ])
      ->first();
    }

    return view('companyinfo',compact('company','isFollowed'));

  }

   public function ViewPosts( $slug){
    $company=Company::where('slug','=',$slug)->first();

    if(!empty($this->user) && $this->user->user_type=="user"){
      //Logging
      if(URL::previous()!="http://localhost:8000/company/".$slug."/posts"){
        $this->log(1,$company->id,'companies');
      }

      //User follow this company or not
      $isFollowed=DB::table('followers')->where([
        ['user_id', '=', $this->user->id],
        ['company_id', '=', $company->id],
      ])
      ->first();
    }

    return view('companyposts',compact('company','isFollowed'));
  }



  public function Follow($id){
    $this->log(10,$id,'companies');

    DB::table('followers')->insert(
    ['user_id' => $this->user->id, 'company_id' => $id]
    );

      return 55;
  }

  public function Unfollow($id){

    $this->log(11,$id,'companies');

    DB::table('followers')
                ->where([
                    ['user_id', '=', $this->user->id ],
                    ['company_id', '=' , $id]
                ])->delete();

      return 55;
  }


}

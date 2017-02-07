<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use Carbon\Carbon;
use Auth;
use App\Company;
use DB;
use File;
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
        'cover'   =>  'mimes:jpeg,jpg,png',
        'facebook'   => 'active_url',
        'instagram'   => 'active_url',
        'linkedin'   => 'active_url',
        'website'   => 'active_url'
    ]);

    // Cover

    if( $request->file('cover')){

      $cover = $request->file('cover');
      $targetLocation = base_path().'/public/assets/companyCoverPhotos/';
      $targetName=microtime(true)*10000 . '.' . $cover->getClientOriginalExtension();
      $x = $request->input('x');
      $y = $request->input('y');
      $w = $request->input('w');
      $h = $request->input('h');
      $cover = Image::make($cover->getRealPath())->crop($w,$h,$x,$y)->save($targetLocation.$targetName);
      // $cover->move($targetLocation,$targetName); // for testing
      $coverPath = $targetName;

      if( $user->company->cover_photo != 'default_cover.jpg'){ // Deleting old photo
        unlink( base_path().'/public/assets/companyCoverPhotos/'.$user->company->cover_photo );
      }
    }else{
      $coverPath = $user->company->cover_path; // Company didn't change previous image
    }


    $company->update([
      'name'=>$request->name,
      'info' => $request->info,
      'address' => $request->address,
      'cover_photo' => $coverPath,
      'fax' => $request->fax,
      'phone1' => $request->phone,
      'phone2' => $request->phone2,
      'facebook' => $request->facebook,
      'instagram' => $request->instagram,
      'linkedin' => $request->linkedin,
      'website' => $request->website,
      'email' => $request->email,
    ]);

    $company->save();

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

    return $id;
  }

  public function Unfollow($id){

    $this->log(11,$id,'companies');

    DB::table('followers')
                ->where([
                    ['user_id', '=', $this->user->id ],
                    ['company_id', '=' , $id]
                ])->delete();

      return $id;
  }


}

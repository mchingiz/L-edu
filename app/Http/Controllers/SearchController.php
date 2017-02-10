<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use Carbon\Carbon;
use DB;
use Auth;

use App\Post;
use App\Log;
use App\Company;
use App\User;
use App\Search;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

use App\Http\Traits\LoggingTrait;
class SearchController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  }
 
  // public function view(Request $request){
  //  $search_key= $request->key;


  //  $companies= User::where([
  //                   ['user_type', '=', 'company'],
  //                   ['name', 'LIKE', '%'.$search_key.'%']
  //                   ])
  //                   ->get();
  //   $posts=POST::where([
  //                   ['approved', '=', '1'],
  //                   ['title', 'LIKE', '%'.$search_key.'%']
  //                   ])
  //   	->orWhere([
  //                   ['approved', '=', '1'],
  //                   ['body', 'LIKE', '%'.$search_key.'%']
  //                   ])
  //   	->get();

  // if(Auth::check())
  // {
  //  $search=Search::create([
  //     'string'=> $search_key,
  //   ]);

  //  $this->log(2,$search->id,'searches');
  // }

  //   return view('search',compact ('search_key','posts','companies'));


  // }

  public function view( Request $request)
    {
      $search_key= $request->key;

          $companies= User::where([
                    ['user_type', '=', 'company'],
                    ['name', 'LIKE', '%'.$search_key.'%']
                    ])
                    ->get();
          $posts=POST::where([
                    ['approved', '=', '1'],
                    ['title', 'LIKE', '%'.$search_key.'%']
                    ])
           ->orWhere([
                          ['approved', '=', '1'],
                          ['body', 'LIKE', '%'.$search_key.'%']
                          ])
           ->get();

          $searchResults = $companies->merge($posts);
          //return $searchResults;
         
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($searchResults);
        //return $collection;
        //Define how many items we want to be visible in each page
        $perPage = 10;

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();

        //Create our paginator and pass it to the view
       $results= new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);
        
      $results->setPath($request->url());
      $results->appends($request->except(['page']));
        return view('search', ['results' => $results, 'search_key'=>$search_key]);
    }
}

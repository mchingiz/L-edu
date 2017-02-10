<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subcategory;
use App\Post;
use Auth;


use App\Http\Traits\LoggingTrait;
class SubcategoryController extends Controller
{
  use LoggingTrait;

  private $user;

  public function __construct(){
    $this->user = Auth::user();
    view()->share('user', $this->user);
  } 

  // public function View($slug, $subslug){
  // 	//subcategory is named as $category
  // 	$category=Subcategory::where('slug','=',$subslug)->first();

  // 	//Check if /category/subcategory pair is true or not
  // 	if( $category->category->menu->slug!=$slug)
  // 		return 404;

  // 	//Logging
  // 	$this->log(1,$category->id,'subcategories');
  // 	return view('category',compact('category'));

  // }

  public function View($slug,$subslug){
    //subcategory is named as $category
    $category=Subcategory::where('slug','=',$subslug)->first();

   //Check if /category/subcategory pair is true or not
   if( $category->category->menu->slug!=$slug)
   return 404;
    
    //Logging
    $this->log(1,$category->id,'subcategories');
    $posts = Post::where([
                        ['category_id', '=', $category->category->id],
                        ['subcategory_id', '=', $category->id],
                        ['approved', '=', '1']
                        ])->paginate(15);
    //$posts= $category->posts->paginate(15);
    
    return view('category',compact('category', 'posts'));

  }
}

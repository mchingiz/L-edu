<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\uploadedFile;

use App\Http\Requests;
use DB;
use Auth;

use App\Category;
use App\Subcategory;
use App\Tag;
use App\User;
use App\Post;
use App\ActionType;
use App\Log;
use App\Company;

trait SlugTrait{
  public function slugCreator($text,$contentType){
    $text = str_ireplace(' ','-',$text);
    $text = str_ireplace('ə','e',$text);
    $text = str_ireplace('ü','u',$text);
    $text = str_ireplace('ş','s',$text);
    $text = str_ireplace('ç','c',$text);
    $text = str_ireplace('ı','i',$text);
    $text = str_ireplace('ö','o',$text);

    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    if($contentType == 'post' && Post::where('slug','=',$text)->first() != NULL){
      $text = $text.'-'.mt_rand(10,99);
    }
    else if($contentType == 'company' && Company::where('slug','=',$text)->first() != NULL){
      $text = $text.'-'.mt_rand(10,99);
    }

    return $text;
  }
}

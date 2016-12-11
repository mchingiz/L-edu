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

trait LoggingTrait{
  public function log($actionTypeID,$loggableID,$loggableType){

    if( Auth::check() ){
      Log::create([
        'user_id' => Auth::user()->id,
        'user_type' => Auth::user()->user_type,
        'action_type_id' => $actionTypeID,
        'loggable_id' => $loggableID,
        'loggable_type' => $loggableType,
      ]);
    }

  }
}

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

trait ViewCounterTrait{
  public function incrementView(Request $request,Post $post){
    if( !$this->isPostViewed($post) ){
      $post->increment('view_counter');
      $post->view += 1;

      $this->storePostAsViewed($post);
    }

    echo("Artiq baxilib");
  }

  private function isPostViewed($post){
    // Get all the viewed posts from the session. If no
    // entry in the session exists, default to an
    // empty array.
    $viewed = $request->session()->get('viewed_posts', []);

    // Check the viewed posts array for the existance
    // of the id of the post
    return in_array($post->id, $viewed);
  }

  private function storePostAsViewed($post){
      // Push the post id onto the viewed_posts session array.
    $request->session()->push('viewed_posts', $post->id);
  }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function posts(){
    return $this->hasMany('App\Post');
  }
  public function subcategories(){
    return $this->hasMany('App\Subcategory');
  }

  public function logs(){
    return $this->morphMany('App\Log','loggable');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
  public function logs(){
    return $this->morphMany('App\Log','loggable');
  }
}

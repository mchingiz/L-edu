<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function company(){
      return $this->belongsTo('App\Company');
    }

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function subcategory(){
      return $this->belongsTo('App\Subcategory');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function reports(){
      return $this->hasMany('App\Report');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable=['company_id','title','body','image',
    'view','slug','category_id','subcategory_id','published','deadline'];

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
    public function logs(){
      return $this->morphMany('App\Log','loggable');
    }


}

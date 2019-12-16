<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_news extends Model
{
  protected $table = "loaitin";
    public function tintuc(){
        return $this->hasMany('App\News','loai_tin','id');
    }
}

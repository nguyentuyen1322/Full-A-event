<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "tintuc";
    public function loaitin(){
        return $this->belongsTo('App\Type_news','loai_tin','id');
    }

}

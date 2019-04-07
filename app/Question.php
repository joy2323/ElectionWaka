<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
    protected $guarded = ["id"];
    protected $table= 'question';

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function answer(){
        return $this->hasMany('App\Answer');
    }
}

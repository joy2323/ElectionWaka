<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded=['id'];
    protected $table= 'category';

    public function question(){
        return $this->hasMany('App\Question');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function manifesto(){
        return $this->belongs('App\Manifesto');
    }
}

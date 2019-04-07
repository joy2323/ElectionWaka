<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded=['id'];
    protected $table='candidates';
    
    public function answer(){
        return $this->hasMany('App\Answer');
    }

    public function poll(){
        return $this->hasMany('App\Poll');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifesto extends Model
{
    protected $guarded ='id';
    protected $table = 'manifesto';

    public function candidate(){
         return $this->hasOne('App\Candidate');
    }

    public function category(){
        return $this->hasMany('App\Category');
    }
}

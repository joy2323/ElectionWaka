<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = ['id'];
    protected $table = 'poll';
    
    public function user(){
        return $this->hasMany('App\User');
    }
    public function candidate(){
        return $this->belongsToMany('App\Candidate');
    }
}

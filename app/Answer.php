<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded=['id'];
    protected $table='answers';
    
    public function candidate(){
        return $this->belongsTo('App\Candidate', 'candidate_id');
    }

    public function question(){
        return $this->belongsTo('App\Question', 'question_id');
    }
}

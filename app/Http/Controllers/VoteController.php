<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Poll;
use App\User;
use App\Manifesto;
use App\Candidate;
class VoteController extends Controller
{
    
    public function index(){
        return view ('user.dashboard');
    }

    //For User dashboard
    public function dashboard(){
        return view ('user.dashboard');
    }

    //For viewing social page
    // public function social(){
    //     return view ('user.social');
    // }

    //For viewing Candidates page
    public function candidates(){
        return view ('user.candidates');
    }

    //For viewing Manifesto page
    public function manifesto(){
        return view ('user.manifesto');
    }

    public function result($email){
        $id=User::whereEmail($email)->first();
        $polls=Poll::id($id)->get();
        // $winne=
        return view ('user.result',compact('polls'));
    }

    public function overall(){
        return view ('user.overall');
    }

    public function questions(){
        return view ('user.questions');
    }

    public function polls()
    {
        $questions = Question::simplePaginate(1);
        return view ('user.poll',compact('questions'));
    }

    // public function page(){
       
    //     return view ('user.qusestions', ['question'=> $questions]);
    // }

    

    
}

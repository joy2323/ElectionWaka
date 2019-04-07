<?php

namespace App\Http\Controllers;
use App\Answer;
use App\Question;
use App\Candidate;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
       $answer=Answer::all();
       return response()->json($answer);
     }

     public function answers(){
        $answer = Answer::all();
       // $question = Question::all();
       // $candidate = Candidate::all();
    //    $allanswers=[];
    //    foreach($answer as $answers){
    //        array_push($allanswers,[
    //         'question'=>$answers->Question->question,
    //           'candidate'=>$answers->Candidate->name,
    //           'answer'=> $answers->answer,
            
    //        ]);        
           
    //    }
    $question=Question::all();
        $total=[];
        $answers=[];
        $questions = [];
        foreach($question as $quest){
            array_push($questions,$quest->question);
            foreach($quest->answer as $answer){
                array_push($questions,['answer'=>$answer->answer,
                'candidate'=>$answer->Candidate->name]);
            }
        }
        array_push($total,$questions);
       return response()->json($question);
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  cand answer
    public function ans($id){
        // $answer = Answer::all();
       // $question = Question::all();
       // $candidate = Candidate::all();
    //    $allanswers=[];
    //    foreach($answer as $answers){
    //        array_push($allanswers,[
    //         'question'=>$answers->Question->question,
    //           'candidate'=>$answers->Candidate->name,
    //           'answer'=> $answers->answer,
            
    //        ]);        
           
    //    }
    $question=Question::whereid($id)->first();
        $total=[];
        $answers=[];
        $questions = [];
        foreach($question->answer as $answer){
            array_push($answers,['answer'=>$answer->answer,
            'candidate'=>$answer->Candidate->name,
            'candidate_id'=>$answer->candidate->id,
            'profile_picture'=>$answer->Candidate->profile_picture
            ]);
        }
        // foreach($question as $quest){
        //     array_push($questions,$quest->question);
        //     foreach($quest->answer as $answer){
        //         array_push($questions,['answer'=>$answer->answer,
        //         'candidate'=>$answer->Candidate->name]);
        //     }
        // }
        // array_push($total,$questions);
       return response()->json($answers);
     }
    // end
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request->all());
        $answer=Answer::create([
            'answer'=>$request->answer,
            'question_id'=>$request->question_id,
            'candidate_id'=>$request->candidate_id,            
        ]);
        if($answer->save()){
            return response()->json([
                'status'=> '200',
                'message'=>'successfully'
            ]);
            }else{
               
                return response()->json([
                    'status'=> '200',
                    'message'=>'not successful'
               
                ]);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        $answer=Answer::whereId($answer)->first();
        //echo $apisss;
        if(!$answer){
            return response()->json([
                'status' => '404',
                'message' => 'This answer is not found in the database',
            ]);
        }else{
        return response()->json(
            [
                'status' => '200',
                'message' => 'successful',
                'result'=>[
                    'id'=>$answer->id,
                    'answer'=>$answer->answer,
                    'question'=>$answer->question_id,
                ]

            ]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        if($answer->update($request->all())){
            return response()->json([ 
            'success'=>true,
            'message'=>'answer details was successfully updated'],200);
            }else{
                return response()->json([
                'success'=>false,
                'message'=>'answer details not updated',], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function delete(Answer $answer)
    {
        if($answer->delete()){
            return response()->json([ 
                'success'=>true,
                'message'=>'answer details was successfully deleted'],200);
            }else{
                    return response()->json([
                   'success'=>false,
                   'message'=>'answer details not deleted',
               ], 500);
            }  
    }
}

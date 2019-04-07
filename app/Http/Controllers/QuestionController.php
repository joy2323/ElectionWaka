<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fetchOne(Request $request, $question)
    {
        //to fecth one question with its category
        $question= Question::whereId($question)->first();
        return response()->json([
            'status' => '200',
            'message' => 'Successful',
            'result' => [
                'question_id' =>$question->id,
                'question' =>$question->question,
                // 'category_id' =>$question->category_id,
                //'category' =>[ 
                    //'Category_id' =>$question->category->id,
                    'category_name' =>$question->category->name
                //]
            ]
            // 'result'=> $question
        ]);
    }

    public function fetchAll(Request $request){
        //to fetch all questions with their category
        $questions = Question::with('category')->get();
        return response()->json($questions);

    }

    public function index()
    {
        $question=Question::all();
        return response()->json($question);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $question=Question::create([
            'question' =>$request->question,
            'category_id'=>$request->category_id,
        ]);
        {
            if ($question->save() );
            return response()->json([
                'status'=> '200',
                'message'=>'Successful'
            ]);
                
            return response()->json([
                'status'=> '500',
                'message'=>'Action denied'
            ]);
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question= Question::whereId($id)->first();
            if(!$question){
                return response()->json([
                    'status'=>'404',
                    'message' => 'This category is not found in the database'
                ]);
            }
                return response()->json([
                    'status'=>'200',
                    'message' => 'Successful',
                    'result' => [
                        'Id'=>$question->id,
                        'question'=>$question->question,
                        'category_id'=>$question->category_id
                    ]
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function status(Request $request, $question)
    {
        $question= Question::whereId($question)->first();
        $question->question=$request->question;
        $question->category_id = $request->category_id;
        if ($question->save()){
            return response()->json([
                'status'=> 200,
                'message'=> 'Question has been updated'
                ]); 
        }
    }


    public function update(Request $request, $id)
    {
       
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($question)
    {
        $question= Question::whereId($question)->first();
        if ($question->delete()){

        return response()->json([
            'status'=> 200,
            'message'=>'question has been deleted'
            ]);

            }else{
        return response()->json([
            'status'=> 500,
            'message'=>'question not deleted!!!',
            ]);

        }
    }
}

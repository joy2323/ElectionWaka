<?php

namespace App\Http\Controllers;
use App\Candidate;
use App\Http\Resources\CandidateResource;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        
        $candidate = Candidate::all();
         return response()->json($candidate);
        
    }

   public function candi()
   {
            // $candidates= Candidate::pluck(['id', 'name']);
            // return response()->json($candidates);

    $candidates = Candidate::select ('id', 'name')->get ();
        return response()->json($candidates);
    
       
   }

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
        $candidate=Candidate::create([
            'name'=>$request->name,
            'state'=>$request->state,
            'profile_picture'=>$request->profile_picture,
            'party_name'=>$request->party_name,
            'party_picture'=>$request->party_picture,
            'dob'=>$request->dob,
            'password'=>\Hash::make($request->password),
        ]);
        if($candidate->save()){
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
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show($candidate)
    {
        $candidate=Candidate::whereId($candidate)->first();
        //echo $apisss;
        if(!$candidate){
            return response()->json([
                'status' => '404',
                'message' => 'This user is not found in the database',
            ]);
        }else{
        return response()->json(
            [
                'status' => '200',
                'message' => 'successful',
                'result'=>[
                    'id'=>$candidate->id,
                    'name'=>$candidate->name,
                    'state'=>$candidate->state,
                ]

            ]);
    }}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //$article->update($request->all());
        if($candidate->update($request->all())){
            return response()->json([ 
            'success'=>true,
            'message'=>'candidate details was successfully updated'],200);
            }else{
                return response()->json([
                'success'=>false,
            'message'=>'candidate details not updated',], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function delete(Candidate $candidate)
    {
        if($candidate->delete()){
            return response()->json([ 
                'success'=>true,
                'message'=>'candidate details was successfully deleted'],200);
            }else{
                    return response()->json([
                   'success'=>false,
                   'message'=>'candidate details not deleted',
               ], 500);
            }  
    }
}

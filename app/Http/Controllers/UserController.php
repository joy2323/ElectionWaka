<?php

namespace App\Http\Controllers;

use App\User;
use App\Poll;
use App\Candidate;
use App\AlreadyVoted;
use Illuminate\Http\Request;
use App\Total;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req=User::all();
        return response()->json($req);
    }


    public function store(Request $request)
    {
        if(count(User::whereEmail($request->email)->get())>=1){
            return response()->json([
                'status'=>419,
                'message'=>'Email already exist'
            ]);
        }
      else{
        $user=new User([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>\Hash::make($request->password),
            
        ]);
            if ($user->save() ){
            return response()->json([
                'status'=>201,
                'message'=>'User is successfully added'
            ]);
            }else{
                response()->json([
                "status"=>405,
                "message"=>'Opps error occurred'
            ]);
            }  
        }
        
    }


public function edit(Request $request,$id){
    $user=User::whereId($id)->first();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=$request->password;
    if($user->save()){
        return response()->json([
            'status'=>201,
            'message'=>'Successfully Updated your account'
        ]);
    }else{
        return response()->json([
            'status'=>419,
            'message'=>'Error occured'
        ]);
    }
}
public function auth(Request $request)
{
    $user=User::whereEmail($request->email)->first();
    if(!$user){
        return response()->json([
            'status'=>404,
            'message'=>'User not found'
        ]);
    }else{
        if($user->name!=$request->name){
            return response()->json([
                'status'=>405,
                'message'=>'Wrong authentication credentials'
            ]); 
        }elseif($user->name==$request->name){
            return response()->json([
                'status'=>201,
                'message'=>'Successful login',
                'result'=>$user
            ]);
        }
    }
}
    //For user to vote for a candidate
    public function pollVote(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        $user->candidate_id = $request->candidate_id;
        $user->score = $request->score;
            return response()->json([
                'status'=> '200',
                'message'=>'Your Vote was  Successful',

            ]);
        
    }

//to get the vote of all candidate for a particular user
    public function resultVote($id){
        $i=User::whereEmail($id)->first();
        $id=$i->id;
        $polls= Poll::whereUser_id($id)->get();
        $result=[];
        foreach($polls as $poll){
            $result[]=[
                "candidate"=>Candidate::whereId($poll->candidate_id)->first()->name,
                "score"=>$poll->score
            ];
        }
        // var_dump($result);
        if($polls){
            return response()->json([
                "status"=>201,
                "result"=>$result
            ]);
        }else{
            return response()->json([
                "status"=>304,
                "result"=>"No poll conducted yet"
            ]);
        }

    }
    public function getVote(Request $request)
    {
        $any=User::whereEmail($request->email)->first();
        if(!$any){
            return response()->json([
                'status'=>405,
                'message'=>'Wrong Email Address'
            ]);
        }elseif(AlreadyVoted::whereEmail($request->email)->first()){
            return response()->json([
                "status"=>419,
                'message'=>'you Cannot take the poll again'
            ]);

        }else{
        
        // var_dump($any['id']);
        $already=new AlreadyVoted;
        $already->email=$request->email;
        $already->save();
        $id=$any['id'];
        $allresults=$request->allresult;
        
        foreach ($allresults as $allresult){
            $poll[] = [
                'user_id'=>$id,
                'candidate_id' =>$allresult['candidate_id'],
                'score' =>$allresult['score'],
            ];
           
        }
        //getting candidate with higest score
        $prices = array_column($poll, 'score');
        $pol=$poll[array_search(max($prices), $prices)];
        $candidat=$pol['candidate_id'];
        //adding it to total poll result
        $totalpoll=new Total;
        $totalpoll->user_id=$id;
        $totalpoll->candidate_id=$candidat;
        $totalpoll->save();
        //adding to individual poll
        (Poll::insert($poll));
            return response()->json([
                "status"=>201,
                "message"=>"Nice job"

            ]);
        }
        
        
    }

    public function polls()
    {
        $poll = Poll::all();
        return response()->json($poll);
    }
    public function totalpoll()
    {
        $total=Total::all();
        $allpollcount=count($total);
        return response()->json([
            'totalcount'=>$allpollcount,
            'result'=>$total
        ]);
    }


    //Don't delete these codes 

    // var_dump($request->get('allresult'));
        
        // // var_dump($request->all());
    //    $poll = User::whereEmail($request->email)->first();
    //     $user_id=$poll->id;
    //     $allresult=$request->allresult;
        // dd($user_id);
        // var_dump($allresult[1]['candidate_id']);
        // for($i=0; $i<array_len($allresult); $i++){
        //     $polls=new Poll;
        //     $polls->user_id=$user_id;
        //     $polls->candidate_id=$allresult[$i]['candidate_id'];
        //     $polls->score=$allresult[$i]['score'];
        //     echo $i;
        // }
        // return response()->json ([
        //     'status' => '200',
        //     'message' => 'Successful',
        //     'result' => [
        //             'candidate_id' => $poll->candidate_id,
        //             'score'=> $poll->score
        //     ]
        // ]);
        // if($user->email!=$request->email){
        //     return response()->json([
        //         'status' => 422,
        //         'message' =>'Invalid User'
        //     ]);
        // }

}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Candidate;
use App\Question;
use App\Category;
use App\Answer;
use Auth;


class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }


    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function admin(){
        return view ('admin.login');
    }
   


    // Candidates Only
    public function addCandidate(){
        return view('admin.addcandidate');
    }
   

    public function get_pictures($picture, Request $request){
        if($request->hasFile($picture)){
            $filename=$request->file($picture)->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file($picture)->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file($picture)->storeAs('public/upload',$filenameToStore);
            return $filenameToStore;
        }
        else{
            return 'noimage.jpg';
        
        }
    }


    public function storeCandidate(Request $request)
    {
        $profile_picture=$this->get_pictures('profile_picture', $request);
        $party_picture=$this->get_pictures('party_picture', $request);
        // dd($profile_picture);
                $candidates = new Candidate([
                    'name'=>$request->name,
                    'state'=> $request->state,
                    'profile_picture'=> $profile_picture,
                    'party_picture' =>$party_picture,
                    'party_name'=> $request->party_name,
                    'dob'=> $request->dob,
                    'manifesto' => $request ->manifesto
                ]);
                if($candidates->save()){
                    // Session::flash('msg',"you are welcome");
                    return redirect("/admin/addcandidate");
                }
                else{
                    // Session::flash('msg','error while inputing data. Make sure you are logged in');
                    return redirect()->back();
                }
    }

    public function viewCandidate(){
        $candidates = Candidate::all();
        return view('admin.viewcandidates', compact('candidates'));
    }

   
    public function editCandidate($id){
        $candidate = Candidate::whereId($id)->first();
        return view('admin.editcandidate', compact('candidate'));
    }

    public function updateCandidate(Request $request, $id){

        $candidate =Candidate::whereId($id)->first();

        $profile_picture=$this->get_pictures('profile_picture', $request);
        $party_picture=$this->get_pictures('party_picture', $request);
        
        $candidate->name=$request->name;
        $candidate->state= $request->state;
        $candidate->profile_picture=$profile_picture;
        $candidate->party_picture =$party_picture;
        $candidate->party_name= $request->party_name;
        $candidate->dob= $request->dob;
        $candidate->manifesto= $request ->manifesto;
        $candidate->save();
        return redirect('/admin/viewcandidates')->with('status', 'Candidate has been stored to the database');

    }    



    public function deleteCandidate(Request $id){
        $candidate = Candidate::whereId($id)->first();
        $candidate->delete();
       return redirect('/admin/viewcandidates'); 
    }
    


    //Category Only
    public function addCategory(){
        return view('admin.addcategory');
    }

    public function storeCategory(Request $request)
    {
    //    $id=Auth::user()->id;
       $category=new Category([
           'name'=>$request->name,   
       ]);
       $category->save();
       return redirect('/admin/addcategory')->with('status', 'Category has been stored to the database');
    }

    public function viewCategory(){
        $category = Category::all();
        return view('admin.viewcategories', compact('category'));
    }
    public function deleteCategory($id){
        $category = Category::whereId($id)->first();
        $category->delete();
       return redirect('/admin/viewcategories')->with('success', 'Category has been deleted Successfully'); 
    }
    public function editCategory($id){
        $category = Category::whereId($id)->first();
        return view('admin.editcategory', compact('category'));
    }
    public function updateCategory(Request $request, $id){

        $category=Category::whereId($id)->first();
        $category->name=$request->name;
        
        $category->save();
        return redirect('/admin/viewcategories');

    }


    //Questions only
    public function addQuestion(){
        return view('admin.addquestion');
    }
    public function storeQuestion(Request $request)
    { 
       $question=new Question([
           'question'=>$request->question,
           
       ]);
       $question->save();
       return redirect('/admin/addquestion')->with('status', 'Question has been added to the database');
    }
    public function viewQuestion(){
        $question = Question::all();
        return view('admin.viewquestions', compact ('question'));
    }
    public function editQuestion($id){
        $question = Question::whereId($id)->first();
        return view('admin.editquestion', compact('question'));
    }
    public function updateQuestion(Request $request, $id){
        $question = Question::whereId($id)->first();
        $question->question=$request->question;
        
        $question->save();
        return redirect('/admin/viewquestions');
    }
    public function detail( $id){
        $question =Question::whereId($id)->first();
        return view('admin.details',compact('question'));
    }
    public function store(Request $request){
        $answer = new Answer;
          $answer->answer = $request ->get('answer');
          $answer->question_id = $request ->question_id; 
          $answer->candidate_id = $request ->candidate_id;  
        $answer->save();
         return redirect()->back();
    }



    
    //Answers Only
    public function addAnswer(){
        return view ('admin.addanswer');
    }
    public function storeAnswer(Request $request)
    { 
       $answer =new Answer([
           'answer'=> $request->question,
        //    'question_id'=> $request->question_id,
        //    'candidate_id'=> $request->candidate_id,      
       ]);
       $answer->save();
       return redirect('/admin/addanswer')->with('status', 'Answer has been added to the database');
    }
    
    public function viewAnswer(){
        $answers = Answer::all();
        return view ('admin.viewanswers', compact('answers'));
    }
    

    //Visitors Only
    // public function viewVisitor(){
    //     $visitors = Visitor::all();
    //     return view ('admin.viewvisitors', compact('visitors'));
    // }


    //Users only
    public function viewUSer(){
        $users = User::all();
        return view ('admin.viewusers', compact('users'));
    }


    //Polls only
    public function viewPoll(){
        $polls = Poll::all();
        return view ('admin.viewpolls', compact('polls'));
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}

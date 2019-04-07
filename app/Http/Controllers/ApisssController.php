<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Apisss;
use App\Category;
use Illuminate\Http\Request;

class ApisssController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        // return $category;
        return response()->json($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $category= Category::create([
            'name' =>$request->name,


        ]);
            if ($category->save() );
            return response()->json([
                'status'=>201,
                'message'=>'You have succesfully filled in a category'
            ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function show( $apisss)
    {
        $category= Category::whereId($apisss)->first();
        // echo $apisss;
        if(!$category){
            return response()->json([
             'status'=> 404,
             'message' => 'This category is not found in the database'
            ]);
        }
        return response()->json([
            'status'=> 200,
             'message' => 'Successful',
             'result' => [
                 'Id'=>$category->id,
                 'name'=>$category->name
             ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function edit(Apisss $apisss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */

     public function status(Request $request, $category)
    {
        // var_dump($request->all());
        $category=Category::whereId($category)->first();
        $category->name=$request->name;
        if ($category->save()){
            return response()->json([
                'status'=> 200,
                'message'=> 'Category successfully updated'
                ]); 
        }else{
            return response()->json([
                'status'=> '500',
                'message'=> 'Category has not been updated'
            ]);
        }
    }
    public function update(Request $request, $category)
    {
        // var_dump($request?->all());
       
        // $category=Category::whereId($category)->first();

        // $category->name=$request->name;
        // if ($category->save()){
        //     return response()->json([
        //         'status'=> '200',
        //         'message'=> 'Category was successfully updated'
        //         ]);
        
       

        // }else{
        //     return response()->json([
        //         'status'=> '500',
        //         'message'=> 'Category has not been updated'
        //     ]);
        // }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apisss  $apisss
     * @return \Illuminate\Http\Response
     */
    public function destory($category)
    {
        $category=Category::whereId($category)->first();
        if ($category->delete()){

        return response()->json([
            'status'=> 200,
            'message'=>'category deleted!!!'
            ]);

            }else{
        return response()->json([
            'status'=> 500,
            'message'=>'category not deleted',
            ]);

        }
    }
    
    
}
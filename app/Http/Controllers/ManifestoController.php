<?php

namespace App\Http\Controllers;

use App\Manifesto;
use  App\Category;
use App\Candidate;
use Illuminate\Http\Request;

class ManifestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addManifesto()
    {
        // $manifesto = Manifesto::all();
        return view('/admin/addmanifesto');
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeManifesto(Request $request)
    {
       $manifesto = new Manifesto([
           'manifesto'=>$request->manifesto
       ]);
        $manifesto->save();
        return redirect('admin.addmanifesto');
    }

    public function viewManifesto()
    {
       $manifesto = Manifesto::all();
       return view ('admin.viewmanifesto', compact('manifesto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manifesto  $manifesto
     * @return \Illuminate\Http\Response
     */
    public function show(Manifesto $manifesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manifesto  $manifesto
     * @return \Illuminate\Http\Response
     */
    public function editManifesto( $id)
    {
        $manifesto = Manifesto::whereId($id)->first();
        return view ('editmanifesto', compact('manifesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manifesto  $manifesto
     * @return \Illuminate\Http\Response
     */
    public function updateManifesto(Request $request, Manifesto $id)
    {
        $manifesto = Manifesto::whereId($id)->first();
        $manifesto->manifesto=$request->manifesto;
            $manifesto->save();
            return redirect ('/admin/viewmanifesto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manifesto  $manifesto
     * @return \Illuminate\Http\Response
     */
    public function destroyManifesto(Manifesto $manifesto, $id)
    {
       $manifesto = Manifesto::whereId($id)->first();
       
        $manifesto ->delete();
        return redirect('/admin/viewmanifesto');

    }
}

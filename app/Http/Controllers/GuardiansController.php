<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guardian;

class GuardiansController extends Controller
{
     public function store(Request $request){
    	$guardian = new Guardian($request->all());
    	$guardian->save();
    	return redirect()->route('g.display');
    }

    public function show(){
    	$guardians = Guardian::all();
    	return view('show-guardian', compact('guardians'));
    }

    public function individual($id) // the id in the url
	{
     	$guardian = Guardian::find($id);

    	return view('individual-guardian')->with('guardian', $guardian);
	 }

     public function edit($id){

        $guardian = Guardian::findorFail($id);

        return view('edit-guardian')->with('guardian', $guardian);
     }

     public function update(Request $request){

        $guardian = Guardian::find($request->id);
        $guardian->update($request->all());
        return redirect()->route('g.display');

     }

     public function delete(Request $request){

        $guardian = Guardian::find($request->id);
        $guardian->delete($request->all());

        return redirect()->route('g.display');
     }
}

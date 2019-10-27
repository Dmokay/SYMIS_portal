<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Principal;


class PrincipalsController extends Controller
{
     public function store(Request $request){
    	$principal = new Principal($request->all());
    	$principal->save();
    	return redirect()->route('p.display');
    }

    public function show(){
    	$principals = Principal::all();
    	return view('show-principal', compact('principals'));
    }

    public function individual($id) // the id in the url
	{
     	$principal = Principal::find($id);

    	return view('individual-principal')->with('principal', $principal);
	 }

     public function edit($id){

        $principal = Principal::findorFail($id);

        return view('edit-principal')->with('principal', $principal);
     }

     public function update(Request $request){

        $principal = Principal::find($request->id);
        $principal->update($request->all());
        return redirect()->route('p.display');

     }

     public function delete(Request $request){

        $principal = Principal::find($request->id);
        $principal->delete($request->all());

        return redirect()->route('p.display');
     }
}

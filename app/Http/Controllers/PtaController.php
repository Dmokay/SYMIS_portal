<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pta;

class PtaController extends Controller
{
    public function store(Request $request){
    	$pta = new Pta($request->all());
    	$pta->save();
    	return redirect()->route('pta.display');
    }

    public function show(){
    	$ptas = Pta::all();
    	return view('show-pta', compact('ptas'));
    }

    public function individual($id) // the id in the url
	{
     	$pta = Pta::find($id);

    	return view('individual-pta')->with('pta', $pta);
	 }

     public function edit($id){

        $pta = Pta::findorFail($id);

        return view('edit-pta')->with('pta', $pta);
     }

     public function update(Request $request){

        $pta = Pta::find($request->id);
        $pta->update($request->all());
        return redirect()->route('pta.display');
    }
}

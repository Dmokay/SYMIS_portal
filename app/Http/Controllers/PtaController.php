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
}

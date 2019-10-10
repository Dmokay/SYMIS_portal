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
}

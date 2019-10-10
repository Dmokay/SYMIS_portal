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
}

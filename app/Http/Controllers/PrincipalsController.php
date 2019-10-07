<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Principal;


class PrincipalsController extends Controller
{
    public function principalsPage(){
    	return view('principals');
    }
     public function store(Request $request){
    	$principal = new Principal($request->all());
    	$principal->save();
    	echo "Principal Saved";
    }
}

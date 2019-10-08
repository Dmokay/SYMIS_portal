<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guardian;

class GuardianController extends Controller
{
     public function store5(Request $request){
    	$guardian = new Guardian($request->all());
    	$guardian->save();
    	echo "Guardian Saved";
    }
}

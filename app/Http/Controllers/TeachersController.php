<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
    public function teachersPage(){
    	return view('teachers');
    }

    public function store(Request $request){
    	$teacher = new Teacher($request->all());
    	$teacher->save();
    	echo "Teacher Saved";
    }
}

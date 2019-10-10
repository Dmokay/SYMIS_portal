<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
     public function store(Request $request){
    	$teacher = new Teacher($request->all());
    	$teacher->save();
    	return redirect()->route('t.display');
    }

    public function show(){
    	$teachers = Teacher::all();
    	return view('show-teacher', compact('teachers'));
    }
}


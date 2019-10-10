<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
     public function store(Request $request){
    	$student = new Student($request->all());
    	$student->save();
    	return redirect()->route('s.display');
    }

    public function show(){
    	$students = Student::all();
    	return view('show-student', compact('students'));
    }
}

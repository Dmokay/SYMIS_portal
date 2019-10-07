<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function studentsPage(){
    	return view('students');
    }
    public function store(Request $request){
    	$student = new Student($request->all());
    	$student->save();
    	echo 'Student Saved';
    }
}

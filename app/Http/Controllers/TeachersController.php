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

     public function individual($id) // the id in the url
	{
     	$teacher = Teacher::find($id);

    	return view('individual-teacher')->with('teacher', $teacher);
	 }

     public function edit($id){

        $teacher = Teacher::findorFail($id);

        return view('edit-teacher')->withTeacher($teacher);
     }

     public function update(Request $request){

        $teacher = Teacher::find($request->id);
        $teacher->update($request->all());
        return redirect()->route('t.display');
     }
}


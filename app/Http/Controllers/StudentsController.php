<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
     public function store(Request $request)
     {
    	$student = new Student($request->all());
    	$student->save();
    	return redirect()->route('s.display');
    }

    public function show()
    {
    	$students = Student::all();
    	return view('show-student', compact('students'));
    }

    public function individual($id) // the id in the url
	{
     	$student = Student::find($id);

    	return view('individual-student')->with('student', $student);
	}

    public function edit($id)
    {

     $student = Student::findOrFail($id);

    return view('edit-student')->withStudent($student);

    }

    public function update(Request $request){
        $student = Student::find($request->id);
        $student->update($request->all());
        return redirect()->route('s.display');
    }

}




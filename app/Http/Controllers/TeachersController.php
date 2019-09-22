<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function teachersPage(){
    	return view('teachers');
    }
}

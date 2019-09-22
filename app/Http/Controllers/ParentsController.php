<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function parentsPage(){
    	return view('parents');
    }
}

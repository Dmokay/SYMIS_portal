<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalsController extends Controller
{
    public function principalsPage(){
    	return view('principal');
    }
}

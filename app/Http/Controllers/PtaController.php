<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtaController extends Controller
{
    public function ptaPage(){
    	return view('pta');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function panelPage(){
    	return view('panel');
    }
}

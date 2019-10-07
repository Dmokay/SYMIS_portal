<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pta;

class PtaController extends Controller
{
    public function ptaPage(){
    	return view('pta');
    }

    public function store(Request $request){
    	$pta = new pta($request->all());
    	$pta->save();
    	echo "Pta Official Saved";

    }
}

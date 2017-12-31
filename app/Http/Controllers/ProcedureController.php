<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;


class ProcedureController extends Controller
{
    public function getAllProcedures(){
        $procedures = Procedure::all();
        return view('layouts.allcases',['procedures' => $procedures]);
    }

    public function getAddProcedure(){
        return view('layouts.addcase');
    }

    public function postAddProcedure(Request $request){
        \Debugbar::info($request->all());
        return redirect()->route('layouts.allcases')->with('info','Show this info');
    }
}

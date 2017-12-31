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
        $procedure = new Procedure();
        $procedure->patient_name = $request->input('patient_name');
        \Debugbar::info($procedure);
        $procedure->save();
        return redirect()->route('layouts.allcases')->with('info','Show this info');
    }
}

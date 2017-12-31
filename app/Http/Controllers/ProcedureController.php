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
        $procedure->last_name = $request->input('last_name');
        $procedure->dvmax_id = $request->input('dvmax_id');
        $procedure->date_of_birth = $request->input('date_of_birth');
        $procedure->sex = $request->input('sex');
        $procedure->breed = $request->input('breed');
        $procedure->weight = $request->input('weight');
        $procedure->email = $request->input('email');
        $procedure->save();
        return redirect()->route('layouts.allcases')->with('info', $procedure->patient_name . " " .
    $procedure->last_name . " was added successfully");
    }
}

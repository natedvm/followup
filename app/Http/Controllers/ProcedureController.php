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

    public function addProcedure(){
        $procedure = new Procedure();

    }
}

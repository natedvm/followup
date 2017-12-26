<?php

namespace App\Http\Controllers;

use App\Procedure;
use DebugBar\DebugBar;
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

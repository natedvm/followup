<?php

namespace App\Http\Controllers;

use App\Procedure;
use Illuminate\Http\Request;


class ProcedureController extends Controller
{
    public function reversedate($string)
    {
        // used to reverse DVMax date format to mysql acceptable format
        $temp = explode('/', $string);
        $return = $temp[2] . '/' . $temp[0] . '/' . $temp[1];
        return $return;
    }

    public function getAllProcedures()
    {
        $headers = Procedure::returnColumnHeaders();
        $procedures = Procedure::all();
        return view('layouts.allcases', ['procedures' => $procedures, 'headers' => $headers]);
    }

    public function getAddProcedure()
    {
        return view('layouts.addcase');
    }

    public function postAddProcedure(Request $request)
    {

        $request->validate([
            'patient_name' => 'required',
            'last_name' => 'required',
            'dvmax_id' => 'nullable|integer',
            'date_of_birth' => 'nullable|date',
            'sex' => 'nullable',
//            TODO need to put in validation for enum field
            'breed' => '',
            'weight' => 'nullable|integer',
            'email' => 'nullable|email'
//            TODO when errors are received fro validation repopulate field in the form
        ]);

        $procedure = Procedure::create($request->only([
            'patient_name',
            'last_name',
            'dvmax_id',
            'date_of_birth',
            'sex',
            'breed',
            'weight',
            'email'
        ]));

        return redirect()->route('layouts.allcases')->with('info', $procedure->patient_name . " " .
            $procedure->last_name . " was added successfully");
    }

    public function postAddProcedureString(Request $request)
    {
        $procedure = new Procedure();
        $dvmmaxdata = explode('|*|', $request->input('export_string'));

        switch ($dvmmaxdata[4]) {
            case "neuteredmale":
                $dvmmaxdata[4] = "M/N";
                break;
            case "intactmale":
                $dvmmaxdata[4] = "M";
                break;
            case "spayedfemale":
                $dvmmaxdata[4] = "F/S";
                break;
            case "intactfemale":
                $dvmmaxdata[4] = "F";
                break;
        }                           // change to enum values for Sex field
        $temp = explode('/', $dvmmaxdata[3]);
        $dvmmaxdata[3] = $temp[2] . '/' . $temp[0] . '/' . $temp[1];          //change date to SQL format
//TODO figure out how to put this into the reversedate call - now it can't find the other function
        $procedure->patient_name = $dvmmaxdata[0];
        $procedure->last_name = $dvmmaxdata[1];
        $procedure->dvmax_id = $dvmmaxdata[2];
        $procedure->date_of_birth = $dvmmaxdata[3];
        $procedure->sex = $dvmmaxdata[4];
        $procedure->breed = $dvmmaxdata[5];
        $procedure->weight = $dvmmaxdata[6];

        $procedure->save();

        return redirect()->route('layouts.allcases')->with('info', $procedure->patient_name . " " .
            $procedure->last_name . " was added successfully");
    }

    public function getEditProcedure($id)
    {
        $procedure = Procedure::find($id);
        return view('layouts.editcase', ['procedure' => $procedure]);
    }

    public function postEditProcedure($id, Request $request)
    {
        $procedure = Procedure::find($id);
        $procedure->patient_name = $request->input('patient_name');
        $procedure->last_name = $request->input('last_name');
        $procedure->dvmax_id = $request->input('dvmax_id');
        $procedure->date_of_birth = $request->input('date_of_birth');
        $procedure->sex = $request->input('sex');
        $procedure->breed = $request->input('breed');
        $procedure->weight = $request->input('weight');
        $procedure->email = $request->input('email');
        $procedure->date_of_surgery = $request->input('date_of_surgery');
        $procedure->side = $request->input('side');
        $procedure->preop_angle = $request->input('preop_angle');
        $procedure->blade_size = $request->input('blade_size');
        $procedure->rotation = $request->input('rotation');
        $procedure->postop_angle = $request->input('postop_angle');
        $procedure->plate = $request->input('plate');
        $procedure->meniscal_status = $request->input('meniscal_status');
        $procedure->comments = $request->input('comments');
        $procedure->complications = $request->input('complications');

        $procedure->save();


        return redirect()->route('layouts.editcase', ['procedure' => $procedure])->with('info', 'Case updated successfully');
    }

}



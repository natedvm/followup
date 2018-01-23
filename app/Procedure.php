<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
   protected $fillable = [
       'patient_name',
       'last_name',
       'dvmax_id',
       'date_of_birth',
       'sex',
       'breed',
       'weight',
       'email'
   ];

    public static function returnColumnHeaders()
    {
        $temp = new Procedure();
        $headers = \Schema::getColumnListing($temp->getTable());
        return $headers;
    }

    public static function convertToDisplayFormat($header)
    {
        $header = str_replace('_',' ',$header);
        $header = ucfirst($header);
        return $header;
    }
}

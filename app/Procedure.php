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
}

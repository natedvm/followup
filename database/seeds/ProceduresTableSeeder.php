<?php

use Illuminate\Database\Seeder;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procedure = new \App\Procedure([
            'patient_name' => 'first',
            'last_name' => 'Miller',
            'dvmax_id' => 34345,
            'date_of_birth' => '2000-01-01',
            'sex' => 'M',
            'breed' => 'testbreed',
            'weight' => 165,
            'date_of_surgery' => '2010-02-02',
            'side' => 'R',
            'preop_angle' => 34,
            'blade_size' => 24,
            'rotation' => 7,
            'postop_angle' => 21,
            'plate' => 'Kyon #10',
            'meniscal_status' => 'good',
            'comments' => 'none',
            'complications' => 'none'
        ]);
        $procedure->save();

        $procedure = new \App\Procedure([
            'patient_name' => 'second',
            'last_name' => 'Jones',
            'dvmax_id' => 34845,
            'date_of_birth' => '2006-01-01',
            'sex' => 'F/S',
            'breed' => 'testbreed2',
            'weight' => 165,
            'date_of_surgery' => '2010-02-02',
            'side' => 'R',
            'preop_angle' => 34,
            'blade_size' => 24,
            'rotation' => 7,
            'postop_angle' => 21,
            'plate' => 'Kyon #10',
            'meniscal_status' => 'good',
            'comments' => 'none',
            'complications' => 'none'
        ]);
        $procedure->save();

        $procedure = new \App\Procedure([
            'patient_name' => 'third',
            'last_name' => 'Smith',
            'dvmax_id' => 34347,
            'date_of_birth' => '2000-01-01',
            'sex' => 'M',
            'breed' => 'testbreed',
            'weight' => 165,
            'date_of_surgery' => '2010-02-02',
            'side' => 'R',
            'preop_angle' => 34,
            'blade_size' => 24,
            'rotation' => 7,
            'postop_angle' => 21,
            'plate' => 'Kyon #10',
            'meniscal_status' => 'good',
            'comments' => 'none',
            'complications' => 'none'
        ]);
        $procedure->save();
    }
}

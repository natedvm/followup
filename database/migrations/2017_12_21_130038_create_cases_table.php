<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('patient_name');
            $table->string('last_name');
            $table->integer('dvmax_id');
            $table->date('date_of_birth');
            $table->enum('sex',['M','F','M/N','F/S']);
            $table->string('breed');
            $table->integer('weight');
            $table->date('date_of_surgery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}

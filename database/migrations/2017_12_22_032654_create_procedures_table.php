<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures', function (Blueprint $table) {
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
            $table->enum('side',['R','L','Bilateral']);
            $table->integer('preop_angle');
            $table->integer('blade_size');
            $table->decimal('rotation',8,2);
            $table->integer('postop_angle');
            $table->string('plate');
            $table->text('meniscal_status');
            $table->text('comments');
            $table->text('complications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedures');
    }
}

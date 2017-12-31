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
            $table->string('patient_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dvmax_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('sex',['M','F','M/N','F/S'])->nullable();
            $table->string('breed')->nullable();
            $table->integer('weight')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_surgery')->nullable();
            $table->enum('side',['R','L','Bilateral'])->nullable();
            $table->integer('preop_angle')->nullable();
            $table->integer('blade_size')->nullable();
            $table->decimal('rotation',8,2)->nullable();
            $table->integer('postop_angle')->nullable();
            $table->string('plate')->nullable();
            $table->text('meniscal_status')->nullable();
            $table->text('comments')->nullable();
            $table->text('complications')->nullable();
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

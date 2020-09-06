<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedad_persona', function (Blueprint $table) {
            $table->bigIncrements('enfermedad_id')->unsigned();
            $table->bigIncrements('persona_id')->unsigned();
        
            $table->foreign('enfermedad_id')->references('id')->on('enfermedads');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermedad_persona');
    }
}

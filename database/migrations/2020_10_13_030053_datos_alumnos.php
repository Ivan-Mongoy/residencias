<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno_id');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('cp');
            $table->string('curp');
            $table->string('num_seguro');
            $table->string('tipo_sangre');
            $table->string('alergias');
            $table->string('medicamentos_alergicos');
            $table->string('complicaciones_medicas');
            $table->string('contac_emerg');
            $table->string('tel_contact');
            $table->string('tel2_contact');
            $table->string('parentesco');
            $table->foreign('alumno_id')->references('idAlumno')->on('alumnos');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_alumnos');
    }
}

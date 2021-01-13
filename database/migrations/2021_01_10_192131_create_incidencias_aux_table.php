<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasAuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias_aux', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_tipo');
            $table->string('tipo');
            $table->string('id_subTipo');
            $table->string('subTipo');
            $table->string('nivel');
            $table->string('id_animal');
            $table->string('animal');
            $table->string('zona');
            $table->string('id_departamento');
            $table->string('departamento');
            $table->string('id_estado');
            $table->string('estado');
            $table->string('id_empleado');
            $table->string('empleado');
            $table->string('emailEmpleado');
            $table->string('id_coordinador');
            $table->string('coordinador');
            $table->string('emailCoordinador');
            $table->string('visitNum');
            $table->string('observaciones');
            $table->string('fechaCreacion');
            $table->string('fechaUpdate');
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
        Schema::dropIfExists('incidencias_aux');
    }
}

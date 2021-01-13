<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdIncidenciaToIncidenciasAux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incidencias_aux', function (Blueprint $table) {
            $table->unsignedInteger('id_incidencias')->after('id');
            $table->foreign('id_incidencias')->references('id')->on('incidencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incidencias_aux', function (Blueprint $table) {
            $table->dropForeign('id_incidencias');
            $table->dropColumn('id_incidencias');
        });
    }

}

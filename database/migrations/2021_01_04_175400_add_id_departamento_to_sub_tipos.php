<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdDepartamentoToSubTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_tipos', function (Blueprint $table) {
            $table->unsignedInteger('id_departamento')->after('id_nivel');
            $table->foreign('id_departamento')->references('id')->on('departamentos');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_tipos', function (Blueprint $table) {
            $table->dropForeign('id_departamento');
            $table->dropColumn('id_departamento');
        });
    }
}

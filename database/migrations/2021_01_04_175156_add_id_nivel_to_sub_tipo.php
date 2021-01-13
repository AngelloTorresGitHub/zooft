<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdNivelToSubTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_tipos', function (Blueprint $table) {
            $table->string('id_nivel')->after('descripcion');
            $table->foreign('id_nivel')->references('id')->on('niveles');            
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
            $table->dropForeign('id_nivel');
            $table->dropColumn('id_nivel');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdZonaToAnimales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animales', function (Blueprint $table) {
            $table->string('id_zona')->after('id');
            $table->foreign('id_zona')->references('id')->on('zonas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animales', function (Blueprint $table) {
            $table->dropForeign('id_zona');
            $table->dropColumn('id_zona');
        });
    }
}

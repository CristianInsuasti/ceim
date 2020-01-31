<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnasNombreDescripcionIdAreaEnEstantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estantes', function (Blueprint $table) {
            $table->text('nombre');
            $table->text('descripcion');
            $table->integer('idArea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estantes', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('descripcion');
            $table->dropColumn('idArea');
        });
    }
}

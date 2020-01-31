<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearColumnasNombreDescripcionEnPisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pisos', function (Blueprint $table) {
            $table->text('nombre');
            $table->text('descripcion');
            $table->number('idEdificio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pisos', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('descripcion');
            $table->dropColumn('idEdificio');
        });
    }
}

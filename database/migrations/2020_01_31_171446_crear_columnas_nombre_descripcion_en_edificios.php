<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearColumnasNombreDescripcionEnEdificios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('edificios', function (Blueprint $table) {
            $table->text('nombre');
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('edificios', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('descripcion');
        });
    }
}

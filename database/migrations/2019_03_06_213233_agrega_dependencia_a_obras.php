<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaDependenciaAObras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->string('dependencia')->after('lugar_Obra');//agregar una columna en la tabla obras
            $table->renameColumn('fecha_inicio', 'fecha_in'); //renombrar una columna
            $table->string('nombre_Obra', 20)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obras', function (Blueprint $table) {
            $table->dropColumn('dependencia');
            $table->renameColumn('fecha_in','fecha_inicio');
            $table->string('nombre_Obra')->change();
        });
    }
}

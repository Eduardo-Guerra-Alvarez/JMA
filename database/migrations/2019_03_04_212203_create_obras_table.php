<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_Obra');
            $table->string('lugar_Obra');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->timestamps();

        });
        
        Schema::create('obra_trabajador', function (Blueprint $table) {
            $table->unsignedInteger('obra_id');
            $table->unsignedInteger('trabajador_id');

            $table->foreign('obra_id')
            ->references('id')
            ->on('obras')
            ->onDelete('cascade');

            $table->foreign('trabajador_id')
            ->references('id')
            ->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obra_trabajador');
        Schema::dropIfExists('obras');
    }
}

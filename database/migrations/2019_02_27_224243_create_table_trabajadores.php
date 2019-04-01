<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTrabajadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedInteger('IDdepartamento');
            $table->unsignedInteger('idObras');
            $table->string('domicilio');
            $table->string('email')->unique();
            $table->string('rfc', 20);//para decir que longitud sea
            $table->timestamps();
        });
        //https://laravel.com/docs/5.8/migrations 
        //para diferentes tipos de datos
        Schema::create('trabajadores_obra', function (Blueprint $table) {
            $table->unsignedInteger('trabajador_id');
            $table->unsignedInteger('obras_id');

            $table->foreing('trabajador_id')
            ->references('id')
            ->on('trabajadores')
            ->onDelete('cascade');

            $table->foreing('obras_id')
            ->references('id')
            ->on('obras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadores_obra');
        Schema::dropIfExists('trabajadores');
    }
}

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
            $table->unsignedInteger('departamento_id');
            $table->string('domicilio');
            $table->string('email')->unique();
            $table->string('rfc', 20);//para decir que longitud sea
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('trabajadores');
    }
}

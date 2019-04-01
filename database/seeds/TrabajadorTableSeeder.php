<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Trabajador::class, 20)->create();

        DB::table('trabajadores')->insert(['nombre' => 'Juan', 'domicilio' => 'Jose Lopez Portillo', 'rfc' => 'AL123']);

        Trabajador::create([
        	'nombre' => 'Pedro',
        	'domicilio' => 'Emiliano Zapata',
        	'rfc' => 'aaa123'
        ]);
    }
}

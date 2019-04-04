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

        DB::table('trabajadores')->insert([
            'nombre' => 'Juan', 
            'departamento_id' => '1',
            'domicilio' => 'Jose Lopez Portillo', 
            'email' => 'Juan@gmail.com',
            'rfc' => 'AL123']);

        App\Trabajador::create([
        	'nombre' => 'Pedro',
            'departamento_id' => '2',
        	'domicilio' => 'Emiliano Zapata',
            'email' => 'Pedro@gmail.com',
        	'rfc' => 'aaa123'
        ]);
    }
}

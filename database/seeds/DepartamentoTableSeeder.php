<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Departamento::class, 5)->create();

        DB::table('departamentos')->insert([
        	'nombre' => 'Ventas',
        	'email' => 'ventas@gmail.com',
        	'password' => 'ventas123.ventas'

        ]);

        App\Departamento::create([
        	'nombre' => 'Compras',
        	'email' => 'compras@gmail.com',
        	'password' => 'ventas123.ventas'

        ]);
    }
}

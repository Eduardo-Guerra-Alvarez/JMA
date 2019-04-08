<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Material::class, 20)->create();

        DB::table('materiales')->insert([
            'nombre' => 'Tornillo', 
            'precio' => '12',
            'cantidad' => '200'
        ]);

        App\Material::create([
        	'nombre' => 'Ladrillo', 
            'precio' => '20',
            'cantidad' => '500'
        ]);
    }
}

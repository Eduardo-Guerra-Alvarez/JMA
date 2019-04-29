<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User();
        $admin->nombre = 'Administrador';
        $admin->email = 'admin@prueba.com';
        $admin->rol = 'admin';
        $admin->email_verified_at = now();
        $admin->password = 'admin';
        $admin->remember_token = Str::random(10);
        $admin->save();
        factory(App\User::class, 15)->create();
    }
}

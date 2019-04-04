<?php

use Faker\Generator as Faker;

$factory->define(App\Trabajador::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'departamento_id' => $faker->numberBetween($min = 1, $max = 5),
        'domicilio' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'rfc' => '$2y$10'
    ];
});

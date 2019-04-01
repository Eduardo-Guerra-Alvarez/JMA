<?php

use Faker\Generator as Faker;

$factory->define(App\Trabajador::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'domicilio' => $faker->address,
        'rfc' => $faker->sentence(1)

    ];
});

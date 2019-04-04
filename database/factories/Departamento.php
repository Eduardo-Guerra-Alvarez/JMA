<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->jobTitle,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10w.k10'
    ];
});

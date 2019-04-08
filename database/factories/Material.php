<?php

use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word, 
        'precio' => $faker->numberBetween($min = 1, $max = 200),
        'cantidad' => $faker->numberBetween($min = 1, $max = 500)
    ];
});

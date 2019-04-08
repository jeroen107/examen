<?php

use Faker\Generator as Faker;

$factory->define(App\Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'race' => $faker->randomElement(['kat', 'hond', 'konijn', 'hamster']),
        'owner_id' => rand(1, 10),
    ];
});

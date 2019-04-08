<?php

use Faker\Generator as Faker;

/**
 * hier worden random gegevens ingevuld voor klant
 */

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->freeEmail,
        'phone' => $faker->phoneNumber,

    ];
});

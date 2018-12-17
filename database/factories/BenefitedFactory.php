<?php

use Faker\Generator as Faker;

$factory->define(\App\Benefited::class, function (Faker $faker) {
    return [
        'card' => $faker->numberBetween(10000000, 99999999),
        'lastname' => $faker->lastName,
        'firstname' => $faker->firstName,
        'is_active' => $faker->boolean,
        'ration_id' => 1,
        'type_benefited_id' => 1,
        'dependence_id' => 1
    ];
});

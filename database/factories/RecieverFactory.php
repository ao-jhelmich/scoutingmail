<?php

use Faker\Generator as Faker;

$factory->define(App\Reciever::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

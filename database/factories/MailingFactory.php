<?php

use Faker\Generator as Faker;

$factory->define(App\Mailing::class, function (Faker $faker) {
    return [
        'subject' => $faker->word,
        'message' => $faker->randomHtml(2, 3),
    ];
});

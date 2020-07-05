<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'brief' => $faker->sentence(5),
        'body' => $faker->sentence(10)
    ];
});

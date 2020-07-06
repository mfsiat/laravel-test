<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence(3),
         'brief' => $faker->sentence(5),
         'body' => $faker->sentence(10),
         'cover_image' => $faker->imageUrl($width = 480, $height = 320),
         'user_id' => $faker->randomDigitNot(2,3,4,5,6,7,8,9,0)
    ];
});

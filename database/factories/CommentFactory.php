<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence(3),
        'user_id' => $faker->numberBetween(1,5),
        'post_id' => $faker->numberBetween(1,10),
        'status' => 1
    ];
});

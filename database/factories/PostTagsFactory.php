<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostTags;
use Faker\Generator as Faker;

$factory->define(PostTags::class, function (Faker $faker) {
    return [
        'post_id' => $faker->numberBetween(1,10),
        'tag_id' => $faker->numberBetween(1,10)
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(250),
        'description' => $faker->text(50),
        'image' => 'blog-' . $faker->numberBetween(1,4) . '.jpg',
        'date' => '14/10/19',
        'views' => $faker->numberBetween(0,500),
        'category_id' => $faker->numberBetween(1,5),
        'user_id' => $faker->numberBetween(1,5),
        'status' => 1,
        'is_featured' => 0
    ];
});

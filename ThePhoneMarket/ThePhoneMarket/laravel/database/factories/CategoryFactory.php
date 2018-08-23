<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->slug,
    ];
});


<?php

use Faker\Generator as Faker;
use App\Auction;


$factory->define(Auction::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->paragraph,
        'dimensions' => $faker->postcode,
        'price' => $faker->randomNumber(2),
        'min_bid' => rand(1, 10),
        'condition' => 'tweedehands',
        'timer' => date('Y-m-d'),
        'user_id' => rand(1, 10),
        'category_id' => rand(1, 4),
     ];
});

<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $gender = $faker->randomElements(['m', 'f']);

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'firstname' => $faker->firstName($gender),
        'lastname' => $faker->lastName,

        //'gender' => $gender,

        'phonenumber' => $faker->phoneNumber,
        'zip' => $faker->postcode,
        'remember_token' => str_random(10),
    ];
});

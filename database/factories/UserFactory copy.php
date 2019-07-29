<?php

use App\User;
use App\Product;
use App\Category;
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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'units' => $faker->randomElement($array = array(250, 500, 750, 1000, 2000)),
        'price' => $faker->randomElement($array = array(250, 500, 750, 1000, 2000)),
        'image' => $faker->imageUrl($width = 300, $height = 200),
        'category_id' => Category::all()->random()->id
    ];
});

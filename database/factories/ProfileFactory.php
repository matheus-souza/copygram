<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $image = $faker->image('public/storage/profile', 1000, 1000);
    return [
        'user_id' => factory('App\User')->create()->id,
        'title' => $faker->name,
        'description' => $faker->text(100),
        'url' => $faker->url,
        'image' => str_replace('public/storage/', '', $image),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();

    $image = $faker->image('public/storage/uploads', 1000, 1000);
    return [
        'user_id' => $faker->randomElement($users),
        'caption' => $faker->title,
        'image' => str_replace('public/storage/', '', $image),
    ];
});

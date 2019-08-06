<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\ProfileUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(ProfileUser::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();
    $profiles = Profile::all()->pluck('id')->toArray();

    return [
        'profile_id' => $faker->randomElement($users),
        'user_id' =>  $faker->randomElement($profiles),
    ];
});

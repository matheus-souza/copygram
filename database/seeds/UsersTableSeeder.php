<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\Mail;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::fake();

        factory('App\User', 10)->create();
        factory(User::class)->create([
            'name' => 'Default User',
            'email' => 'default@mail.com',
            'username' => 'defaultuser',
            'email_verified_at' => now(),
            'password' => Hash::make('qwe123qwe'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}

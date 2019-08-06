<?php

use Illuminate\Database\Seeder;

class ProfileUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\ProfileUser', 100)->create();
    }
}

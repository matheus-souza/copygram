<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Mail;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mail::fake();

        factory('App\Profile', 10)->create();
    }
}

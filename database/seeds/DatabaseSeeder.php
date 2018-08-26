<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Students;

        $user->username = 'nick';
        $user->password = \Illuminate\Support\Facades\Hash::make('123');
        $user->email = 'nickk.2974@gmail.com';

        $user->save();
    }
}

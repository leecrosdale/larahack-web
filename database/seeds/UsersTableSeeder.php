<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Lee Crosdale";
        $user->email = "lee@lee.com";
        $user->password = \Illuminate\Support\Facades\Hash::make('secret');
        $user->save();
    }
}

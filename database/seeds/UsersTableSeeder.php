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
        \App\User::create([
            'name' => 'Lee Crosdale',
            'email' => 'lee@larahack.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);

        factory(\App\User::class, 40)->create();




    }
}

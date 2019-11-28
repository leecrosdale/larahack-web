<?php

use Illuminate\Database\Seeder;

class HackathonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Hackathon::class)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Sponsor::class, 5)->create(['hackathon_id' => \App\Hackathon::first()->id]);
    }
}

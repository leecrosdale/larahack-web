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

        // Create a hackathon that happened in the past.
        factory(\App\Hackathon::class)->create(
            [
                'name' => 'Larahack #1',
                'start' => \Carbon\Carbon::now()->subMonth(),
                'voting_start' => \Carbon\Carbon::now()->subMonth()->addWeek(),
                'voting_end' => \Carbon\Carbon::now()->subMonth()->addWeeks(2),
                'end' => \Carbon\Carbon::now()->subMonth()->addWeeks(3),
                'active' => false,
                'theme' => 'Expired Hackathon'
            ]
        );

    }
}

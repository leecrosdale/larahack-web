<?php

use Illuminate\Database\Seeder;

class StreamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Stream::create([
            'hackathon_id' => \App\Hackathon::first()->id,
            'username' => 'crosdale'
        ]);
        \App\Stream::create([
            'hackathon_id' => \App\Hackathon::first()->id,
            'username' => 'madmikeyb'
        ]);
        \App\Stream::create([
            'hackathon_id' => \App\Hackathon::first()->id,
            'username' => 'olliecodes'
        ]);
        \App\Stream::create([
            'hackathon_id' => \App\Hackathon::first()->id,
            'username' => 'safascodes'
        ]);
    }
}

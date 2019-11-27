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
            'event_id' => \App\Event::first()->id,
            'username' => 'crosdale'
        ]);
    }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'name' => 'LaraHack #1',
        'event_start' => \Carbon\Carbon::now()->subDay(),
        'event_voting_start' => \Carbon\Carbon::now()->addWeek(),
        'event_voting_end' => \Carbon\Carbon::now()->addWeeks(2),
        'event_end' => \Carbon\Carbon::now()->addWeeks(3),
        'active' => true,
        'theme' => $faker->name
    ];
});


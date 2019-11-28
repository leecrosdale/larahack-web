<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Hackathon::class, function (Faker $faker) {
    return [
        'name' => 'LaraHack #1',
        'start' => \Carbon\Carbon::now()->subDay(),
        'voting_start' => \Carbon\Carbon::now()->addWeek(),
        'voting_end' => \Carbon\Carbon::now()->addWeeks(2),
        'end' => \Carbon\Carbon::now()->addWeeks(3),
        'active' => true,
        'theme' => $faker->name
    ];
});


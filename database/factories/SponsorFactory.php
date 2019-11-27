<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sponsor;
use Faker\Generator as Faker;

$factory->define(Sponsor::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'url' => $faker->url,
        'image' => $faker->image(),
        'description' => $faker->paragraph
    ];
});

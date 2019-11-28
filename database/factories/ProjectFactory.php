<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->paragraph(3, true),
        'url' => $faker->url,
        'repo' => $faker->url,
        'image' => $faker->imageUrl()
    ];
});

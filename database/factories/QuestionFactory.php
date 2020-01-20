<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(1, 8)),"."),
        'body' =>$faker->paragraph(rand(1,15),true),
        'views'=>rand(-1,10),
        'answers'=>rand(1,8),
        'votes'=>rand(1,8),
    ];
});

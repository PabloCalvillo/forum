<?php

use Faker\Generator as Faker;

$factory->define(forum\Forum::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph
    ];
});

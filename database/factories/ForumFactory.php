<?php

use Faker\Generator as Faker;

$factory->define(forum\Forum::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'description' => $faker->paragraph,
        'slug' => str_slug($name, '-'),
    ];
});

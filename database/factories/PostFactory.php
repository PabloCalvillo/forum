<?php

use Faker\Generator as Faker;

$factory->define(forum\Post::class, function (Faker $faker) {
    return [
        'user_id' => \forum\User::all()->random()->id,
        'forum_id' => \forum\Forum::all()->random()->id,
        'title' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});

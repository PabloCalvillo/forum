<?php

use Faker\Generator as Faker;

$factory->define(forum\Reply::class, function (Faker $faker) {
    return [
        'user_id' => \forum\User::all()->random()->id, 
        'post_id' => \forum\Post::all()->random()->id, 
        'reply' => $faker->paragraph,
        'attachment' => \Faker\Provider\Image::image(storage_path() . '\app\replies', 200, 200, 'animals', false),
    ];
});

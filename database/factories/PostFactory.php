<?php

use Faker\Generator as Faker;

$factory->define(forum\Post::class, function (Faker $faker) {
    $title =  $faker->sentence;
    return [
        'user_id' => \forum\User::all()->random()->id,
        'forum_id' => \forum\Forum::all()->random()->id,
        'title' => $title,
        'description' => $faker->paragraph,
        'slug' => str_slug($title, '-'),
        'attachment' => \Faker\Provider\Image::image(storage_path() . '\app\posts', 200, 200, 'technics', False),
    ];
});

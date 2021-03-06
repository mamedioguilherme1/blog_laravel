<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker-> words(3, true),
        'content' => $faker->sentences(5, true),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker-> name,
        'comment' => $faker->sentences(5, true),
        'post_id' => \App\Post::all()->random()->id,
    ];
});

$factory->define(App\Reply::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker-> name,
        'reply' => $faker->sentences(5, true),
        'comment_id' => \App\Comment::all()->random()->id,
    ];
});

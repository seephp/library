<?php

use App\User;
use App\Book;
use App\Author;
use App\Publisher;
use App\Author_Book;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'publisher_id' => function () {
            return factory(App\Publisher::class)->create()->id;
        },
        'title' => $faker->name,
        'description' => $faker->sentence,
        'publish_year' => $faker->year,
        'cover' => $faker->url,

    ];
});

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Publisher::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
    ];
});

$factory->define(App\Publisher::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
    ];
});

$factory->define(App\AuthorBook::class, function (Faker $faker) {
    return [
        'author_id' => function () {
            return factory(App\Author::class)->create()->id;
        },
        'book_id' => function () {
            return factory(App\Book::class)->create()->id;
        }
    ];
});

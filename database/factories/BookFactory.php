<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words($faker->numberBetween(1, 10), true),
        'page_count' => $faker->numberBetween(1, 9999),
        'released_at' => $faker->year(),
        'description' => $faker->paragraph(),
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
        'author_id' => function () {
            return factory(Author::class)->create()->id;
        }
    ];
});

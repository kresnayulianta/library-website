<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->words($faker->numberBetween(1, 3), true);

    return [
        'name' => $name,
        'slug' => $name,
    ];
});

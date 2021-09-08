<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $name = $faker->words($faker->numberBetween(1, 3), true);

    return [
        'name' => $name,
        'slug' => $name,
    ];
});

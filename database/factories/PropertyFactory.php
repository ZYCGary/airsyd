<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(App\Models\Property::class, function (Faker $faker) {
    $date_time = $faker->date . '' . $faker->time;

    return [
        'type' => $faker->numberBetween(0, 4),
        'street' => $faker->streetAddress,
        'total_bedrooms' => $faker->numberBetween(1, 7),
        'total_bathrooms' => $faker->numberBetween(1, 7),
        'max_load' => $faker->numberBetween(1, 7),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

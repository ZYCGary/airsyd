<?php

/** @var Factory $factory */

use App\Models\Room;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Room::class, function (Faker $faker) {
    $names = ['Master Room', 'Secondary Room', 'Guest Room', 'Granny Room', 'Room 1', 'Room 2'];
    return [
        'name' => $faker->randomElement($names),
        'rent' => $faker->numberBetween(100, 500),
        'bath' => $faker->numberBetween(0, 2),
        'bed_size' => $faker->numberBetween(0, 4),
        'bond' => $faker->numberBetween(0, 4),
        'bills' => $faker->numberBetween(0, 2),
    ];
});

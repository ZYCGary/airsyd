<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(App\Models\Locale::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->languageCode,
        'language' => $faker->word,
        'speak' => $faker->word,
        'is_app_lang' => false,
        'is_admin_lang' => false,
    ];
});

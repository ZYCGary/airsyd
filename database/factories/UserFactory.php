<?php

/** @var Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

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
    // Fake datetime
    $date_time = $faker->date . '' . $faker->time;
    // Fake avatars
    $avatars = [
        asset('images/defaults/avatars/avatar_1.png'),
        asset('images/defaults/avatars/avatar_2.png'),
        asset('images/defaults/avatars/avatar_3.png'),
        asset('images/defaults/avatars/avatar_4.png'),
        asset('images/defaults/avatars/avatar_5.png'),
        asset('images/defaults/avatars/avatar_6.png'),
    ];
    // Fake language codes
    $languageCodes = ['zh-cn', 'zh-hk', 'en-au'];


    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('11111111'),
        'remember_token' => Str::random(10),
        'introduction' => $faker->sentence(),
        'avatar' => $faker->randomElement($avatars),
        'prefer_lang' => $faker->randomElement($languageCodes),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

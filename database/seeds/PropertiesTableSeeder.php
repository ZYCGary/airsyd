<?php

use App\Models\Category;
use App\Models\Suburb;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = User::all()->pluck('id')->toArray();
        $category_ids = Category::all()->pluck('id')->toArray();
        $suburb_ids = Suburb::all()->pluck('id')->toArray();
        $faker = app(Faker\Generator::class);

        $properties = factory(Property::class)
            ->times(50)
            ->make()
            ->each(function ($property, $index)
            use ($user_ids, $category_ids, $suburb_ids, $faker) {
                $property->user_id = $faker->randomElement($user_ids);
                $property->category_id = $faker->randomElement($category_ids);
                $property->suburb_id = $faker->randomElement($suburb_ids);
            });

        Property::insert($properties->toArray());
    }

}


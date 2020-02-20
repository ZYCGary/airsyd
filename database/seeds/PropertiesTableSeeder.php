<?php

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    public function run()
    {
        $properties = factory(Property::class)
            ->times(50)
            ->make()
            ->each(function ($property, $index) {
            if ($index == 0) {
                // $property->field = 'value';
            }
        });

        Property::insert($properties->toArray());
    }

}


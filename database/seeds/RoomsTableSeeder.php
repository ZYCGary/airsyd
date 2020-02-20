<?php

use App\Models\Property;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property_ids = Property::all()->pluck('id')->toArray();
        $faker = app(Faker\Generator::class);

        $rooms = factory(Room::class)
            ->times(50)
            ->make()
        ->each(function ($room, $index)
        use($property_ids, $faker)
        {
            $room->property_id = $faker->randomElement($property_ids);
        });

        Room::insert($rooms->toArray());
    }
}

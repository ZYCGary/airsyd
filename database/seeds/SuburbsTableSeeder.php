<?php

use App\Models\Suburb;
use Illuminate\Database\Seeder;

class SuburbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suburbs = [
            [
                'code' => '2138',
                'name' => 'Rhodes',
                'state' => 'NSW'
            ],
            [
                'code' => '2135',
                'name' => 'Strathfield',
                'state' => 'NSW'
            ],
            [
                'code' => '2022',
                'name' => 'Bondi Junction',
                'state' => 'NSW'
            ],
            [
                'code' => '2008',
                'name' => 'Chippendale',
                'state' => 'NSW'
            ],
        ];

        Suburb::insert($suburbs);
    }
}

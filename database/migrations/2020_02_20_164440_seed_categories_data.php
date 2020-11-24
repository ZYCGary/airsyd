<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name' => 'room',
                'description'=> 'Room(s) in an existing sharehouse',
            ],
            [
                'name' => 'whole',
                'description' => 'Whole property for rent',
            ],
            [
                'name' => 'living',
                'description' => 'Living Room',
            ],
            [
                'name' => 'share',
                'description' => 'Shared room',
            ],
            [
                'name' => 'sublet',
                'description' => 'Sublet',
            ],
            [
                'name' => 'bed',
                'description' => 'Bed for rent',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}

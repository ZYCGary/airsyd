<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
	public function up()
	{
		Schema::create('properties', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('type_id')->unsigned()->index();
            $table->string('street');
            $table->integer('suburb')->index();
            $table->integer('total_bedrooms');
            $table->integer('total_bathrooms');
            $table->integer('max_load');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('properties');
	}
}

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
            $table->integer('accommodation')->unsigned()->index();
            $table->integer('type')->unsigned()->index();
            $table->string('street');
            $table->string('suburb');
            $table->string('state');
            $table->integer('total_bedrooms');
            $table->integer('total_bathrooms')->unsigned();
            $table->integer('max_load')->unsigned();
            $table->json('rooms');
            $table->json('photos')->nullable();
            $table->integer('status')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::dropIfExists('properties');
	}
}

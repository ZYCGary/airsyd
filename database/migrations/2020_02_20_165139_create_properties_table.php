<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index()->comment('The accommodation type offered');
            $table->integer('type')->unsigned()->comment('The type of property');
            $table->string('street');
            $table->integer('suburb_id')->index();
            $table->integer('total_bedrooms')->unsigned();
            $table->integer('total_bathrooms')->unsigned();
            $table->integer('max_load')->unsigned()->comment('Max number of tenants');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('properties');
    }
}

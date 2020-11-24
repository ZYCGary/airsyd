<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration
{
	public function up()
	{
		Schema::create('locales', function(Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('language');
            $table->string('speak');
            $table->boolean('is_app_lang')->default(false);
            $table->boolean('is_admin_lang')->default(false);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('locales');
	}
}

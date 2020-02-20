<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->environment() == 'local' || app()->environment() == 'testing') {

            $this->app->register(\Summerblue\Generator\GeneratorsServiceProvider::class);

        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Category::observe(\App\Observers\CategoryObserver::class);
		\App\Models\Property::observe(\App\Observers\PropertyObserver::class);
		\App\Models\Locale::observe(\App\Observers\LocaleObserver::class);

        //
    }
}

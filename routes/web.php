<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Shared routes */


/* Web pages routes */
Route::name('web.')->group(function () {
    // Change locale route
    Route::get('locales/{code}/set', 'Shared\LocalesController@set')->name('locales.set');

    Route::namespace('Web')->group(function () {
        /* Web auth routes */
        Auth::routes(['verify' => true]);

        /* Static pages routes */
        Route::get('/', 'PagesController@home')->name('home');

        /* User profile routes */
        Route::resource('users', 'UsersController', ['show', 'edit', 'update']);

        // Properties routes
        Route::resource('properties', 'PropertiesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

        /* Theme routes */
        Route::prefix('theme')->group(function () {
            Route::get('', 'ThemeController@home')->name('theme.home');
            Route::get('about', 'ThemeController@about')->name('theme.about');
            Route::get('contact', 'ThemeController@contact')->name('theme.contact');
            Route::get('services', 'ThemeController@services')->name('theme.services');
            Route::get('agent', 'ThemeController@agent')->name('theme.agent');
            Route::get('blog', 'ThemeController@blog')->name('theme.blog');
            Route::get('blog-single', 'ThemeController@singleBlog')->name('theme.blog.single');
            Route::get('properties', 'ThemeController@properties')->name('theme.properties');
            Route::get('properties-single', 'ThemeController@singleProperties')->name('theme.properties.single');
        });
    });
});

/* Admin routes */
Route::prefix('admin')->name('admin.')->group(function () {
    // Change locale route
    Route::get('locales/{code}/set', 'Shared\LocalesController@set')->name('locales.set');

    Route::namespace('Admin')->group(function () {
        // Locale routes
        Route::resource('locales', 'LocalesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
    });
});

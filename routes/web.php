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

Route::get('/', 'PagesController@home')->name('home');

Auth::routes();


/* Theme Routes */
Route::prefix('theme')->group(function (){
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

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


/* Web pages routes */
Route::namespace('Web')->name('web.')->group(function () {
    /* Web auth routes */
//    Route::namespace('Auth')->group(function() {
//        // User authentication routes
//        Route::get('login', 'LoginController@showLoginForm')->name('login');
//        Route::post('login', 'LoginController@login');
//        Route::post('logout', 'LoginController@logout')->name('logout');
//
//        // Register routes
//        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
//        Route::post('register', 'RegisterController@register');
//
//        // Password reset routes
//        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
//        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
//        Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
//
//        // Email verification routes
//        Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
//        Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
//        Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
//    });
    Auth::routes(['verify' => true]);

    Route::get('/', 'PagesController@home')->name('home');

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



<?php

use App\Models\Traits\LocaleTrait;


/**
 * Format current route name into a css class name.
 * @return string|string[]
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

if (!function_exists('get_current_route_group')) {
    /**
     * Get current route group to identify where the request from: web, admin or shared.
     *
     * @return mixed
     */
    function get_current_route_group()
    {
        $routeGroup = Route::current()->getName();
        return explode('.', $routeGroup)[0];
    }
}

if (!function_exists('get_app_locale')) {
    /**
     * Get all the locales supported by the web site.
     *
     * @return array
     */
    function get_app_locale()
    {
        return LocaleTrait::getAllAppLocales();
    }
}

if (!function_exists('get_admin_locale')) {
    /**
     * Get all the locales supported by the admin site.
     *
     * @return array
     */
    function get_admin_locale()
    {
        return LocaleTrait::getAllAdminLocales();
    }
}

if (!function_exists('get_speaks')) {
    /**
     * Get all languages speak.
     *
     * @return array
     */
    function get_speaks()
    {
        return LocaleTrait::getAllSpeaks();
    }
}

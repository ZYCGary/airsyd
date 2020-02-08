<?php


/**
 * Format current route name into a css class name.
 * @return string|string[]
 */
function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}

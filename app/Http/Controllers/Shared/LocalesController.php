<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;

class LocalesController extends Controller
{
    /**
     * Set the locale.
     *
     * @param $locale
     * @return RedirectResponse
     */
    public function set($locale)
    {
        switch (get_current_route_group()) {
            case 'web':
                if (array_key_exists($locale, get_app_locale())) {
                    Session::put('locale', $locale);
                }
                break;
            case 'admin':
                if (array_key_exists($locale, get_admin_locale())) {
                    Session::put('locale', $locale);
                }
        }
        return redirect()->back();
    }
}

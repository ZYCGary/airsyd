<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Display the home page.
     *
     * @return Factory|View
     */
    public function home() {
        return view('web.pages.home');
    }
}

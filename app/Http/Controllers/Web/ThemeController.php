<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function home()
    {
        return view('web.theme.home');
    }

    public function about()
    {
        return view('web.web.theme.about');
    }

    public function contact()
    {
        return view('web.theme.contact');
    }

    public function services()
    {
        return view('web.theme.services');
    }

    public function agent()
    {
        return view('web.theme.agent');
    }

    public function blog()
    {
        return view('web.theme.blog');
    }

    public function singleBlog()
    {
        return view('web.theme.blog_single');
    }

    public function properties()
    {
        return view('web.theme.properties');
    }

    public function singleProperties()
    {
        return view('web.theme.properties_single');
    }
}

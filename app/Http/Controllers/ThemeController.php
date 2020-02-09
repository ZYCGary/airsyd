<?php

namespace App\Http\Controllers;

class ThemeController extends Controller
{
    public function home()
    {
        return view('theme.home');
    }

    public function about()
    {
        return view('theme.about');
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function agent()
    {
        return view('theme.agent');
    }

    public function blog()
    {
        return view('theme.blog');
    }

    public function singleBlog()
    {
        return view('theme.blog_single');
    }

    public function properties()
    {
        return view('theme.properties');
    }

    public function singleProperties()
    {
        return view('theme.properties_single');
    }
}

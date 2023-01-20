<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function  index()
    {
        return view('index');
    }

    public function  about()
    {
        return view('about');
    }

    public function  contact()
    {
        return view('contact');
    }

    public function  report()
    {
        return view('report');
    }

    public function  properties()
    {
        return view('properties');
    }

    public function  categories()
    {
        return view('categories');
    }

}

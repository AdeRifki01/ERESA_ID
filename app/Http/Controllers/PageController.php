<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function about()
    {
        return view('about');
    }

    public function rebootcom()
    {
        return view('rebootcom');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function price()
    {
        return view('price');
    }

    public function contact()
    {
        return view('contact');
    }
}

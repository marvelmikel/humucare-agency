<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function job()
    {
        return view('job');
    }
    public function company()
    {
        return view('company');
    }
    public function contact()
    {
        return view('contact');
    }
}

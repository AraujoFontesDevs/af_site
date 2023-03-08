<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showIndex()
    {
        return view('pages.home');
    }

    public function showAbout()
    {
        return view('pages.about');
    }
    public function showSocio()
    {
        return view('pages.socios');
    }
}

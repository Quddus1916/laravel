<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home()
    {
        return view('HomePage');
    }

    function About()
    {
        return view('doctor');
    }
    function contact()
    {
        return "controller contact method";
    }
}

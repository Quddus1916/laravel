<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home()
    {
        return "controller home method";
    }

    function About()
    {
        return "controller about method";
    }
    function contact()
    {
        return "controller contact method";
    }
}

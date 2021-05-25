<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    function myname($namevalue)
    {
        return $namevalue ;
    }
}

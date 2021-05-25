<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    function myname($firstname,$middlename,$lastname)
    {
        return view('myname',['fkey'=>$firstname,'mkey'=>$middlename,'lkey'=>$lastname]) ;
    }
}

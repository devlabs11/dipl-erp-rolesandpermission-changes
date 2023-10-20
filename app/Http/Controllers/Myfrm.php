<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myfrm extends Controller
{
    function index(Request $request)
    {
        return $request->post();
        die("here");
    }
}

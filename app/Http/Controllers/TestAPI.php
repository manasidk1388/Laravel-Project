<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPI extends Controller
{
    function getData()
    {   
        return "hello! Manasi";
    }
}
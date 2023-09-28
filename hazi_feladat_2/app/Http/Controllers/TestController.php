<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function today()
    {
        return date("Y-m-d");
    }
}

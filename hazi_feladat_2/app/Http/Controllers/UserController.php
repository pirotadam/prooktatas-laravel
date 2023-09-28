<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        return 'UserController (store)';
    }

    public function index(?string $name = 'Adam'): string
    {
        return $name;
    }

    public function list()
    {
        return 'UserController (list)';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        return view('main');
    }

    public function Hello_PHP()
    {
        return 'Hello, PHP!';
    }

    public function Hello_Laravel()
    {
        return 'Hello, Laravel!';
    }
}

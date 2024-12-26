<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function content()
    {
        return view('mainpage.content');
    }


    public function das()
    {
        return view('dashboard.das');
    }


    public function test()
    {
        return view('dashboard.test');
    }

    
}

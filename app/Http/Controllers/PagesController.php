<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use app\Http\Controllers\PageController;


class PagesController extends Controller
{
    function home()
    {
        return view('Home');
    }
    // function login()
    // {
    //     return view('login');
    // }
}

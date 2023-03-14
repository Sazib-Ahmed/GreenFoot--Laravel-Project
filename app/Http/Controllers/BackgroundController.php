<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    function getBackground1()
    {
        $minutes = 365 * 24 * 60;
            $cookie = Cookie::queue(Cookie::make('background','background1', $minutes));
            return back();
    }
    function getBackground2()
    {
        $minutes = 365 * 24 * 60;
            $cookie = Cookie::queue(Cookie::make('background','background2', $minutes));
            return back();
    }
    function getBackground3()
    {
        $minutes = 365 * 24 * 60;
            $cookie = Cookie::queue(Cookie::make('background','background3', $minutes));
            return back();
    }
    function getBackgroundDefault()
    {
        $minutes = 365 * 24 * 60;
            $cookie = Cookie::queue(Cookie::make('background','backgrounddefault', $minutes));
            return back();
    }
}

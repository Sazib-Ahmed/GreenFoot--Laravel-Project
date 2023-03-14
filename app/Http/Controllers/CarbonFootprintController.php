<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CarbonFootprintController extends Controller
{
    public function index()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('frontend.carbonfootprint.index', compact('cartTotal', 'cartCount'));
    }

    public function calculatecarbonfootprint()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('frontend.carbonfootprint.calculate', compact('cartTotal', 'cartCount'));
    }




}

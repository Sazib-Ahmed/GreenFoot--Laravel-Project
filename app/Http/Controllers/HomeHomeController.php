<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeHomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get(['id','name', 'price','slug']);
        
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('frontend.homehomepage', compact('products', 'cartTotal', 'cartCount'));
    }
}

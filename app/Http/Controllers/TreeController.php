<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tree; 

class TreeController extends Controller
{
    //
    public function index()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        $trees_data=Tree::all();

        return view('frontend.otherservices.tree',['trees'=>$trees_data], compact('cartTotal', 'cartCount'));
    }

    public function tree()
    {
        $trees_data=Tree::all();
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();
        
        return view('frontend.otherservices.tree',['trees'=>$trees_data], compact('cartTotal', 'cartCount'));
    }
}

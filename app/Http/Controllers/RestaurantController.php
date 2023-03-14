<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Restaurant; 

class RestaurantController extends Controller
{
    public function index()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        $restaurants_data=Restaurant::all();

        return view('frontend.otherservices.ecorestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'));
    }

    public function restaurant($area=null)
    {
        $restaurants_data=Restaurant::all();
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();
        
        return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => $area ]);
    }
    public function brestaurant($area=null)
    {

        return back()->with([ 'area' => "Bashundhara" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Bashundhara" ]);
    }
    public function grestaurant($area=null)
    {


        return back()->with([ 'area' => "Gulshan" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }

    public function baddarestaurant($area=null)
    {


        return back()->with([ 'area' => "Badda" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }

    public function allrestaurant($area=null)
    {

        return back()->with([ 'area' => "all" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }

}

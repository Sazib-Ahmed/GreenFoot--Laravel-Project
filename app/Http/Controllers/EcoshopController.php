<?php

namespace App\Http\Controllers;

use App\Models\Ecoshop; 
use Illuminate\Http\Request;

class EcoshopController extends Controller
{
    public function index()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        $ecoshops_data=Ecoshop::all();

        return view('frontend.otherservices.ecoshop',['ecoshops'=>$ecoshops_data], compact('cartTotal', 'cartCount'));
    }

    public function ecoshop($area=null)
    {
        $ecoshops_data=Ecoshop::all();
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();
        
        return view('frontend.otherservices.ecoshop',['ecoshops'=>$ecoshops_data], compact('cartTotal', 'cartCount'))->with([ 'area' => $area ]);
    }
    public function becoshop($area=null)
    {


        return back()->with([ 'area' => "Bashundhara" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Bashundhara" ]);
    }
    public function secoshop($area=null)
    {


        return back()->with([ 'area' => "Shyamoli" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Bashundhara" ]);
    }
    public function gecoshop($area=null)
    {



        return back()->with([ 'area' => "Gulshan" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }

    public function uecoshop($area=null)
    {



        return back()->with([ 'area' => "Uttara" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }

    public function allecoshop($area=null)
    {

  

        return back()->with([ 'area' => "all" ]);
        
        //return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => "Gulshan" ]);
    }
}

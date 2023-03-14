<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Http;

class foodprintController extends Controller
{
    public function index()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('foodprint.view', compact('cartTotal', 'cartCount'));
    }

    public function test()
    {
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('foodprint.test', compact('cartTotal', 'cartCount'));
    }

    public function getupc(Request $request) {

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image -> move(public_path('images'), $new_name);

                //$user['image']= $new_name;
        return response()->json(['uploaded_image'=> '<img src="/images/'.$new_name.'" width="300" />']);
        //return response()->json(['file_path'=> $new_name ]);

        }

    public function get_product(Request $request) {
        $upc = trim($request->upc);
        $product = DB::table('foodprints')->where('upc', $upc)->first();
        return response()->json(
            [
                'product_image' => '<img src="/images/'.$product->image.'" width="200" />',
                'product' => $product,
            ]);
        }

}

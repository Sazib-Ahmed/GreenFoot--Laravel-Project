<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodprintController;
use App\Models\Restaurant; 

use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/sendemail',[\App\Http\Controllers\MailController::class,'send']);
// Route::post('/sendemail', function(){
//     $mailData = [
//         'name'      =>  'sazib',
//         'email'      =>  '@email',
//         'phone'      =>  '01',
//         'message'   =>   'hi'
//     ];


//     Mail::to('customer@mail.com')->send(new SendMail($mailData));
//     return back()->with('c_message', 'Thanks for contacting us!');
// });


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/home', [\App\Http\Controllers\HomeHomeController::class, 'index'])->name('homehomepage');
Route::get('/shop/{slug?}', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/restaurant', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('otherservices.ecorestaurant');
Route::get('restaurant/{$area}', [\App\Http\Controllers\RestaurantController::class, 'restaurant'])->name('otherservices.arearestaurant');
//return view('frontend.otherservices.arearestaurant',['restaurants'=>$restaurants_data], compact('cartTotal', 'cartCount'))->with([ 'area' => $area ]);
// Route::get('/ss/{$area}', function($area)
// {
//     //return view('frontend.otherservices.arearestaurant')->with([ 'area' => $area ]);
//     return $area;

// });

Route::get('/c02emission',function()
{
    return view('frontend.otherservices.c02emission');
});

Route::get('/compare',function()
{
    return view('frontend.otherservices.comparefootprint');
});

Route::get('/restaurant/Bashundhara', [\App\Http\Controllers\RestaurantController::class, 'brestaurant']);
Route::get('/restaurant/Gulshan', [\App\Http\Controllers\RestaurantController::class, 'grestaurant']);
Route::get('/restaurant/Badda', [\App\Http\Controllers\RestaurantController::class, 'baddarestaurant']);
Route::get('/restaurant/all', [\App\Http\Controllers\RestaurantController::class, 'allrestaurant']);

Route::get('/ecoshop', [\App\Http\Controllers\EcoshopController::class, 'index'])->name('otherservices.ecoshop');
Route::get('/tree', [\App\Http\Controllers\TreeController::class, 'index'])->name('otherservices.tree');
Route::post('/tree', [\App\Http\Controllers\TreeController::class, 'index'])->name('otherservices.tree');
Route::get('/ecoshop/Bashundhara', [\App\Http\Controllers\EcoshopController::class, 'becoshop']);
Route::get('/ecoshop/Gulshan', [\App\Http\Controllers\EcoshopController::class, 'gecoshop']);
Route::get('/ecoshop/Uttara', [\App\Http\Controllers\EcoshopController::class, 'uecoshop']);
Route::get('/ecoshop/Shyamoli', [\App\Http\Controllers\EcoshopController::class, 'secoshop']);
Route::get('/ecoshop/all', [\App\Http\Controllers\EcoshopController::class, 'allecoshop']);

Route::get('/carbonfootprint', [\App\Http\Controllers\CarbonFootprintController::class, 'index'])->name('carbonfootprint.index');
Route::get('/shop/tag/{slug?}', [\App\Http\Controllers\ShopController::class, 'tag'])->name('shop.tag');
Route::get('/product/{product:slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

// react route
Route::get('products/{slug?}', [\App\Http\Controllers\ShopController::class, 'getProducts']);
Route::get('products', [\App\Http\Controllers\HomeController::class, 'getProducts']);
Route::get('product-detail/{product:slug}', [\App\Http\Controllers\ProductController::class, 'getProductDetail']);
Route::post('carts', [\App\Http\Controllers\CartController::class, 'store']);
Route::get('carts', [\App\Http\Controllers\CartController::class, 'showCart']);
// ongkir
Route::get('api/provinces', [\App\Http\Controllers\OngkirController::class, 'getProvinces']);
Route::get('api/cities', [\App\Http\Controllers\OngkirController::class, 'cities']);
Route::get('api/shipping-cost', [\App\Http\Controllers\OngkirController::class, 'shippingCost']);
Route::post('api/set-shipping', [\App\Http\Controllers\OngkirController::class, 'setShipping']);
Route::post('api/checkout', [\App\Http\Controllers\OrderController::class, 'checkout']);
// get user login
Route::get('api/users', [\App\Http\Controllers\UserController::class, 'index']);
// ==========


Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/order/checkout', [\App\Http\Controllers\OrderController::class, 'process'])->name('checkout.process');
    Route::resource('/cart', \App\Http\Controllers\CartController::class)->except(['store', 'show']);

    
Route::get('/carbonfootprint/calculate', [\App\Http\Controllers\CarbonFootprintController::class, 'calculatecarbonfootprint'])->name('carbonfootprint.calculate');

    Route::group(['middleware' => ['isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
       
        // categories
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::post('categories/images', [\App\Http\Controllers\Admin\CategoryController::class,'storeImage'])->name('categories.storeImage');
    
        // tags
        Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
    
        // products
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::post('products/images', [\App\Http\Controllers\Admin\ProductController::class,'storeImage'])->name('products.storeImage');
    });
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeHomeController::class, 'index'])->name('homehomepage');




//=============================================================moshiiiiiiiiiiiii================================================

// Route::get('/foodprint_view', function () {
//     return view('foodprint.view');
// });

Route::get('/foodprint_view', [foodprintController::class,'index']);
Route::get('/foodprint_test', [foodprintController::class,'test']);


Route::post('/foodprint_get_upc','foodprint_AjaxController@get_upc');

Route::post('/getupc',[foodprintController::class,'getupc']);

Route::post('/foodprint-get-product',[foodprintController::class,'get_product']);

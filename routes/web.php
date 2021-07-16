<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo "Hello " . $name . "!";
    } else {
        echo 'Hello World!';
    }
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});
Route::get('/product',function () {
    return view('product');
});
Route::post('/product', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price * $discountPercent * 0.1 ;
    $discountPrice = $price -  $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
Route::get('/dictionary', function (){
    return view('dictionary');
});
Route::post('/dictionary', function (Illuminate\Http\Request $request){
    $wordIn = $request->wordIn;
    $dictionary = ['dog' => 'chó', 'cat' => 'mèo', 'fish' => 'cá', 'lion' => 'sư tử', 'tiger' => 'hổ'];

    foreach ($dictionary as $key => $value) {
        if ($key === $wordIn){
            $translate = $value;
            return view('dictionary', compact(['wordIn', 'translate']));
        } else {
            $translate = "not found";
        }
    }
    return view('dictionary', compact(['wordIn', 'translate']));

});

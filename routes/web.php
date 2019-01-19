<?php

// trang chu
Route::get('/', 'HomeController@index')->name('home');

// danh muc
Route::get('/danh-muc/{id}.htm', 
        'HomeController@listProducts')->name('cate');

Route::post('/add-cart', "HomeController@addCart")->name('cart.add');
Route::get('/check-cart', function(){
        dd(session('cart'));
})->name('cart.checkout');
Route::get('/remove-cart', function(){
        session()->forget('cart');
})->name('cart.clear');

// chi tiet san pham
Route::get('/chi-tiet/{id}.htm', 
        'HomeController@detail')->name('detail');

// Dang nhap
Route::get('cp-login', "HomeController@cpLogin")->name('login');
        
// check dang nhap
Route::post('cp-login', "HomeController@cpPostLogin");

// dang xuat
Route::any('logout', "HomeController@logout")->name('logout');


Route::get('test-ajax', function (){
        return view('ajax');
});

Route::post('check-middleware', function(){
        return "Hello Holla!";
})->middleware(['checkAdult', 'auth'])->name('post-middle');

Route::group(['middleware' => ['checkAdult', 'auth'], 'prefix' => 'xxx'], function(){

});
use App\Product;
use Illuminate\Http\Request;
Route::post('post-test-ajax', function (Request $request){
        $count = Product::where('name', $request->product_name)->count();
        $msg = $count >= 1 ? "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác" : "";
        return response()->json([
                "success" => $count == 0,
                "msg" => $msg
        ]);
})->name('postajax');

use App\Invoice;
Route::get('relate', function () {
    $invoice = Product::find(8);
    dd($invoice->invoices);
});
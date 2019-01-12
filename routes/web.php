<?php

// trang chu
Route::get('/', 'HomeController@index')->name('home');

// danh muc
Route::get('/danh-muc/{id}.htm', 
        'HomeController@listProducts')->name('cate');

// chi tiet san pham
Route::get('/chi-tiet/{id}.htm', 
        'HomeController@detail')->name('detail');

// Dang nhap
Route::get('cp-login', "HomeController@cpLogin")->name('login');
        
// check dang nhap
Route::post('cp-login', "HomeController@cpPostLogin");

// dang xuat
Route::any('logout', "HomeController@logout")->name('logout');


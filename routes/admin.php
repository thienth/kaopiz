<?php

Route::get('/', "DashboardController@index")->name('dashboard');

Route::group(['prefix' => 'product'], function () {
    Route::get('/', "ProductController@index")->name('product.list');    
    Route::get('/remove/{id}', "ProductController@remove")->name('product.remove');    
});



?>
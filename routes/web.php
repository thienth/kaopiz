<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/danh-muc/{id}.htm', 'HomeController@listProducts')->name('cate');

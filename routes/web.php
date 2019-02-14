<?php

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('customer', 'CustomerController@index');
    Route::post('customer', 'CustomerController@store');
    Route::delete('customer', 'CustomerController@destroy');
    Route::get('customer/{customer}', 'CustomerController@show');
});

Auth::routes();

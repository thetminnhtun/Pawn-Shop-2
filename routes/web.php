<?php

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Auth::routes();


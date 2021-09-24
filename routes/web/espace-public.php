<?php


use Illuminate\Support\Facades\Route;

Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function() {
    Route::get('register', 'RegisterController@index')->name('register');
    Route::post('register', 'RegisterController@store');

    
});


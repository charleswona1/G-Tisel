<?php


use Illuminate\Support\Facades\Route;

Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function() {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'LoginController@index')->name('login');
        Route::post('login', 'LoginController@store');

        Route::get('register', 'RegisterController@index')->name('register');
        Route::post('register', 'RegisterController@store');
    });
    
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
});


<?php


use Illuminate\Support\Facades\Route;

Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function() {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'LoginController@index')->name('login');
        Route::post('login', 'LoginController@store');

        Route::get('register', 'RegisterController@index')->name('register');
        Route::post('register', 'RegisterController@store');
    });

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/logout', 'LogoutController@logOut')->name('logout');
    });
    
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::namespace('Sites')->group(function(){
        Route::get('/', 'SitesController@index')->name('site');
        Route::get('/my-sites', 'SitesController@mySite')->name('my-sites');
        Route::prefix('{site}')->group(function(){
            Route::get('/show', 'SitesController@show')->name('show');
            Route::get('/demand', 'SitesController@demand')->name('demand');
        });
        
    });
   
    Route::prefix('account')->namespace('Accounts')->name('account.')->group(function(){
        Route::get('/','ProfileController@index' )->name('index');
    });
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/', 'HomeController@index')->name('index');
// });


<?php

use Illuminate\Support\Facades\App;
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

// $language = App::getLocale();

Route::redirect('/','/'.App::getLocale());

Route::prefix('{language}')->group(function(){
    Route::view('/', 'home.index')->name('index');
    Route::get('/sites', 'SitesController@index')->name('sites');
});

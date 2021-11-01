<?php


use Illuminate\Support\Facades\Route;


Route::get('/', 'TableauBordController@index')->name('dashboard');
Route::prefix('sites')->namespace('Site')->group(function(){
    Route::get('/', 'SitesController@index')->name('index');
    Route::get('/create', 'SitesController@create')->name('create');
    Route::post('/create', 'SitesController@store');
});

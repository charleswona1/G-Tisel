<?php


use Illuminate\Support\Facades\Route;
Route::namespace('Site')->group(function(){
    Route::get('/', 'SitesController@create')->name('create');
    Route::post('/', 'SitesController@store');
});

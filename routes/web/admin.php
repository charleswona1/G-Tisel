<?php


use Illuminate\Support\Facades\Route;


Route::get('/', 'TableauBordController@index')->name('dashboard');
Route::prefix('sites')->namespace('Site')->group(function(){
    Route::get('/', 'SitesController@index')->name('index');
    Route::get('/publie', 'SitesController@sitePublier')->name('publie');
    Route::get('/nom-publie', 'SitesController@siteNonPublier')->name('non-publie');
    Route::get('/create', 'SitesController@create')->name('create');
    Route::post('/create', 'SitesController@store');
    Route::get('/search', 'SitesController@search')->name('search');
    Route::prefix('{site}')->group(function(){
        Route::get('/edit','SitesController@edit')->name('edit');
        Route::post('/edit','SitesController@update');
        Route::get('/delete','SitesController@delete')->name('delete');
    });
});

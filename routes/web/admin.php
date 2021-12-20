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

Route::prefix('demande')->namespace('Demande')->group(function() {
    Route::get('/', 'DemandeController@index')->name('index-demande');
    Route::get('/attente', 'DemandeController@demandeEnAttente')->name('demande-attente');
    Route::get('/cours', 'DemandeController@demandeEnCours')->name('demande-en-cours');
    Route::get('/rejete', 'DemandeController@demandeEnRejetes')->name('demande-rejete');
    Route::prefix('{demande}')->group(function(){
        Route::get('/change-status','DemandeController@changeStatus')->name('change-status');;
        Route::get('/traiment','DemandeController@traitement')->name('traitement');
        Route::post('/traiment','DemandeController@saveTraitement');
    });
});

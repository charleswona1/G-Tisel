<?php


use Illuminate\Support\Facades\Route;

Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function() {
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', 'LoginController@login')->name('login');
        Route::post('login', 'LoginController@store');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/logout', 'LoginController@logout')->name('logout');
    });
    
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/', 'TableauBordController@index')->name('dashboard');
    Route::prefix('sites')->namespace('Site')->middleware('admins')->group(function(){
        Route::get('/', 'SitesController@index')->middleware('admins')->name('index');
        Route::get('/publie', 'SitesController@sitePublier')->middleware('admins')->name('publie');
        Route::get('/nom-publie', 'SitesController@siteNonPublier')->middleware('admins')->name('non-publie');
        Route::get('/create', 'SitesController@create')->middleware('gestionnaire')->name('create');
        Route::post('/create', 'SitesController@store')->middleware('admins');
        Route::get('/search', 'SitesController@search')->name('search');
        Route::prefix('{site}')->middleware('gestionnaire')->group(function(){
            Route::get('/edit','SitesController@edit')->name('edit');
            Route::post('/edit','SitesController@update');
            Route::get('/delete','SitesController@delete')->name('delete');
        });
    });
    
    Route::prefix('demande')->namespace('Demande')->group(function() {
        Route::get('/', 'DemandeController@index')->middleware('admins')->name('index-demande');
        Route::get('/attente', 'DemandeController@demandeEnAttente')->middleware('admins')->name('demande-attente');
        Route::get('/cours', 'DemandeController@demandeEnCours')->middleware('admins')->name('demande-en-cours');
        Route::get('/rejete', 'DemandeController@demandeEnRejetes')->middleware('admins')->name('demande-rejete');
        Route::prefix('{demande}')->middleware('gestionnaire')->group(function(){
            Route::get('/change-status','DemandeController@changeStatus')->name('change-status');;
            Route::get('/traiment','DemandeController@traitement')->name('traitement');
            Route::post('/traiment','DemandeController@saveTraitement');
        });
    });
    
    Route::prefix('personnel')->namespace('Users')->middleware('supAdmin')->group(function() {
        Route::get('/', 'UsersController@index')->name('personnel');
        Route::get('/create', 'UsersController@create')->name('create-personnel');
        Route::post('/create', 'UsersController@store');
        Route::prefix('{admin}')->group(function(){
            Route::get('/edit','UsersController@edit')->name('edit-personnel');
            Route::post('/edit','UsersController@update');
            Route::get('/delete','UsersController@delete')->name('delete-personnel');
        });
    });
    
    Route::prefix('demamdeur')->namespace('Demandeurs')->group(function() {
        Route::get('/', 'DemandeurController@index')->middleware('admins')->name('demandeur');
        Route::get('/activation', 'DemandeurController@activeCopmte')->middleware('supAdmin')->name('activation');
        Route::get('/delete', 'DemandeurController@delete')->middleware('supAdmin')->name('deleteCompte');
    });
});

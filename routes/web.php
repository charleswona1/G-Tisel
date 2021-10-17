<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('local/{locale}','SetLanguageController@switchLocale')->name('locale.set');

Route::view('/', 'home.index')->name('index');
Route::get('/sites', 'SitesController@index')->name('sites');
Route::get('/sites/{site}/show', 'SitesController@show')->name('show');

Route::view('public/auth/disabled','auth.verification_success')->name('auth.success');

Route::prefix('public')
    ->namespace('EspacePublic')
    ->name('public.')
    ->group(__DIR__ . '/web/espace-public.php');

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->group(__DIR__ . '/web/admin.php');

Route::get('/documentation','DocumentsController@index')->name('documentation');

Route::prefix('email')->namespace('Auth')->name('verification.')->group(function() {
    Route::middleware('auth')->group(function () {
        // Redirection vers la page affichée après avoir validé son inscription
        Route::get('/verify', 'EmailVerificationController@show')->name('notice');
        // Validation de l'adresse mail après avoir cliqué sur le bouton du mail
        Route::get('/verify/{id}/{hash}', 'EmailVerificationController@verify')->name('verify');
        // Envoi d'un nouveau lien d'activation
        Route::get('/verification-notification', 'EmailVerificationController@request')->name('send');
    });
});






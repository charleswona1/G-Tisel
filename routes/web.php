<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

    Route::view('public/auth/disabled','auth.verification_success')->name('auth.success');

    Route::prefix('public')
     ->namespace('EspacePublic')
     ->name('public.')
     ->group(__DIR__ . '/web/espace-public.php');
     
});

// Route::prefix('email')->namespace('Auth')->name('verification.')->group(function() {
//     Route::middleware('auth')->group(function () {
//         // Redirection vers la page affichée après avoir validé son inscription
//         Route::get('/verify', 'EmailVerificationController@show')->name('notice');
//         // Validation de l'adresse mail après avoir cliqué sur le bouton du mail
//         Route::get('/verify/{id}/{hash}', 'EmailVerificationController@verify')->name('verify');
//         // Envoi d'un nouveau lien d'activation
//         Route::get('/verification-notification', 'EmailVerificationController@request')->name('send');
//     });
// });

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/fr/public/auth/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');




<?php

use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('main');
});

Route::view('/home','home')->middleware('auth');

Route::view('/admin','admin.home')
    ->name('admin')
    ->middleware('auth')
    ->middleware('is_admin');
Route::get('/login', [AuthenticatedSessionController::class,'showForm'])
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class,'login']);
Route::get('/logout', [AuthenticatedSessionController::class,'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('/register', [RegisterUserController::class,'showForm'])
    ->name('register');
Route::post('/register', [RegisterUserController::class,'store']);

Route::get('/Webradio/AffichageArtiste',[ArtisteController::class,'affichageartiste'])
    ->name('artisre') ;

/*admin*/
Route::middleware(['is_admin','auth'])->group(function () {
Route::get('/Webradio/create',[ArtisteController::class,'ajoutartiste'])
    ->name('ajoutartist');
Route::post('/Webradio/create',[ArtisteController::class,'ajoutartist'])
    ->name('artiste');

Route::get('/Webradio/{id}/edit',[ArtisteController::class,'modartisteform'])
    ->name('modarform');
Route::post('/Webradio/{id}/edit',[ArtisteController::class,'mod'])
    ->name('modeart');

Route::get('/Webradio/{id}/sup',[ArtisteController::class,'supartisteform'])
    ->name('suparform');
Route::post('/Webradio/{id}/sup',[ArtisteController::class,'supartist'])
    ->name('supart');
});

Route::get('webradio/{user_id}/afficheutilisateur',[UserController::class,'affiche']);
Route::get('/webradio/{user_id}/accepter',[UserController::class,'accepte_form'])
    ->name('accepteform');
Route::post('/webradio/{user_id}/accepter',[UserController::class,'accepter'])
    ->name('accepter');
Route::get('webradio/utilisantderoulan',[UserController::class,'deroulantutilisateur']) ;

/*utilisateur*/

Route::get('/decouvrirjésus', function () {
    return view('radioweb.DecouvrirJesus');
})->name('decouvjésus');
Route::get('/devenirpartenaire', function () {
    return view('radioweb.devenirpartenaire');
})->name('devenirpartenaire');
Route::get('/NotreVision', function () {
    return view('radioweb.NotreVision');
})->name('notrevision');
Route::get('/podcast', function () {
    return view('radioweb.PodCasts');
})->name('podcasts');
Route::get('/nouveaudepart', function () {
    return view('radioweb.NouveauDepart');
})->name('nouveaudepart');




<?php

use App\Http\Controllers\Personnenregistree;
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
})->name('maiin');


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



/*admin*/
Route::middleware(['is_admin','auth'])->group(function () {
Route::get('/Webradio/create',[Personnenregistree::class,'ajoutartiste'])
    ->name('ajoutartist');
Route::post('/Webradio/create',[Personnenregistree::class,'ajoutartist'])
    ->name('artiste');

Route::get('/Webradio/{id}/edit',[Personnenregistree::class,'modartisteform'])
    ->name('modarform');
Route::post('/Webradio/{id}/edit',[Personnenregistree::class,'mod'])
    ->name('modeart');

Route::get('/Webradio/{id}/sup',[Personnenregistree::class,'supartisteform'])
    ->name('suparform');
Route::post('/Webradio/{id}/sup',[Personnenregistree::class,'supartist'])
    ->name('supart');
});

Route::get('webradio/{user_id}/afficheutilisateur',[UserController::class,'affiche']);
Route::get('/webradio/{user_id}/accepter',[UserController::class,'accepte_form'])
    ->name('accepteform');
Route::post('/webradio/{user_id}/accepter',[UserController::class,'accepter'])
    ->name('accepter');
Route::get('webradio/utilisantderoulan',[UserController::class,'deroulantutilisateur']) ;

/*utilisateur*/

Route::get('/lespersonnesenregistres', [Personnenregistree::class,'affichagelistepersonne'])->name('lespersonnesenregistrees');

Route::get('/Nouscontacter', [Personnenregistree::class,'ajoutnouvellepersonne'])->name('nouscontacter');
Route::post('/Nouscontacter', [Personnenregistree::class,'ajoutpersonne'])->name('contacter');





Route::get('/devenirpartenaire', function () {
    return view('radioweb.devenirpartenaire');
})->name('devenirpartenaire');


Route::get('/Actesdecompassion', function () {
    return view('radioweb.Actesdecompassion');
})->name('actesdecompassion');

Route::get('/campagnevangelisation', function () {
    return view('radioweb.campagnevngelisation');
})->name('evangelisation');

Route::get('/Nosactions', function () {
    return view('radioweb.Nosactions');
})->name('nosactions');

Route::get('/presentationisf', function () {
    return view('radioweb.PresentationISF');
})->name('presentationISF');


Route::get('/CaoSurleMali', function () {
    return view('radioweb.CapSurleMali');
})->name('capsurlemali');

Route::get('/Inhaiti', function () {
    return view('radioweb.Inhaiti');
})->name('inhaiti');

Route::get('/Madagascar', function () {
    return view('radioweb.CapSurMadagacar');
})->name('capsurmadagascar');


Route::get('/Commentparticiper', function () {
    return view('radioweb.Commentparticiper');
})->name('commentparticiper');


Route::get('/OperationCartable', function () {
    return view('radioweb.OperationCartable');
})->name('operationcartable');





<?php

/*
|--------------------------------------------------------------------------
| Necessities
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsFormController;

/*
|--------------------------------------------------------------------------
| Links to the pages
|--------------------------------------------------------------------------
*/

//Link home
Route::get('/', function () {
return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function(){
    return redirect()->route('login');
});

//Link Account-gegevens
Route::get('/edit', function () {
    return view('edit');
});

//Link Account-verwijderen
Route::get('/verwijder', function () {
    return view('verwijder');
});

/*
|--------------------------------------------------------------------------
| Methods voor gebruikers
|--------------------------------------------------------------------------*/

//Create Method
Route::get('/producten', [App\Http\Controllers\ProductController::class, 'makeProduct']);
Route::post('/producten', [App\Http\Controllers\ProductController::class, 'setProduct']);
//Edit Method
Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit']);
Route::post('/edit/{id}', [App\Http\Controllers\HomeController::class, 'setEdit']);
//Delete Method
Route::get('/verwijder{id}', [App\Http\Controllers\HomeController::class, 'deleteUserlogged']);
Route::post('/verwijder/{id}', [App\Http\Controllers\HomeController::class, 'deleteUserlogged']);

/*
|--------------------------------------------------------------------------
| Crud methods voor providers
|--------------------------------------------------------------------------*/

//index Method
Route::get('/providers', [App\Http\Controllers\ProviderController::class, 'getAll']);

//edit Method
Route::get('/providers/providersEdit/{id}', [App\Http\Controllers\ProviderController::class, 'getProvider']);
Route::post('/providers/providersEdit/{id}', [App\Http\Controllers\ProviderController::class, 'updateProvider']);

//delete Method
Route::get('/providers/providersDelete/{id}', [App\Http\Controllers\ProviderController::class, 'deleteProvider']);

//create Method
Route::get('/providers/providersCreate', [App\Http\Controllers\ProviderController::class, 'getNewProvider']);
Route::post('/providers/providersCreate', [App\Http\Controllers\ProviderController::class, 'createProvider']);

/*
|--------------------------------------------------------------------------
| Crud methods voor Users
|--------------------------------------------------------------------------*/

//index Method
Route::get('/gebruikers', [App\Http\Controllers\UserController::class, 'getAll']);

//edit Method
Route::get('/gebruikers/gebruikersEdit/{id}', [App\Http\Controllers\UserController::class, 'getUser']);
Route::post('/gebruikers/gebruikersEdit/{id}', [App\Http\Controllers\UserController::class, 'updateUser']);

//delete Method
Route::get('/gebruikers/gebruikersDelete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser']);

//create Method
Route::get('/gebruikers/gebruikersCreate', [App\Http\Controllers\UserController::class, 'getNewUser']);
Route::post('/gebruikers/gebruikersCreate', [App\Http\Controllers\UserController::class, 'createUser']);

/*
|--------------------------------------------------------------------------
| Routes for the login system
|--------------------------------------------------------------------------*/

Auth::routes();





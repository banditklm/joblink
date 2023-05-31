<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name('welcome');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::get('/monCv', [App\Http\Controllers\UserController::class, 'monCv'])->name('monCv');
Route::get('/display', [App\Http\Controllers\UserController::class, 'display'])->name('display');
Route::get('/apropos', [App\Http\Controllers\UserController::class, 'apropos'])->name('apropos');//add by me
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::put('/users/{user}/update-description', [UserController::class, 'updateDescription'])->name('users.updateDescription');
Route::post('/experiences', [UserController::class, 'storeExperiences'])->name('experiences.store');
Route::delete('/experiences/{experience}',[UserController::class, 'destroy'])->name('experiences.destroy');
Route::put('/users/{experience}/experiences-update', [UserController::class, 'experiencesUpdate'])->name('experiences.update');
Route::get('/experience', [UserController::class, 'testmodel'])->name('testmodel');
// OFFRES
Route::post('/offresStore', [UserController::class, 'offresStore'])->name('offres.store');
Route::get('/recherche', [UserController::class, 'searchOffre'])->name('search.offers');









// Route::get('/apropos', function () { //add by me
//     return view('apropos');
// })->name('apropos');


// Route::get('/test2', function () {
//     return view('/test/test');
// })->name('test');

// Route::get('/editProfile', function () {
//     return view('editProfile');
// })->name('editProfile');

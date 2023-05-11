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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');


Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/test2', function () {
    return view('/test/test');
})->name('test');

Route::get('/editProfile', function () {
    return view('editProfile');
})->name('editProfile');

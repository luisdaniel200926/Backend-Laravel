<?php

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
    return view('welcome');
});

Route::resource('/pets',\App\Http\Controllers\PetController::class);
Route::get('/pets/{id}/deletePet',[\App\Http\Controllers\PetController::class,'destroy']);
Route::resource('/users',\App\Http\Controllers\UserController::class);
Route::get('/users/{id}/deleteUser',[\App\Http\Controllers\UserController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


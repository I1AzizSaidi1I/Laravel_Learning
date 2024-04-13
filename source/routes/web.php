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

Route::get('/home', function () {
    return view('home.index');
});


Route::get('/login', [\App\Http\Controllers\authenticationController::class , 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\authenticationController::class , 'register'])->name('register');

Route::get('/myTickets/{$id]', [\App\Http\Controllers\ManageTickets::class , 'show'])->name('ticket');


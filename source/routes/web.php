<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageTickets;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
});


Route::get('/login', [\App\Http\Controllers\authenticationController::class , 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\authenticationController::class , 'register'])->name('register');

Route::get('/myTickets', [\App\Http\Controllers\ManageTickets::class , 'show']);


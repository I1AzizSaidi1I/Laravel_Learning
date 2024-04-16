<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageTickets;
use App\Http\Controllers\authenticationController;
Route::get('/', function () {
    return redirect()->route('tickets');
});

Route::get('/home', function () {
    return view('home.index');
});


Route::get('/login', [\App\Http\Controllers\authenticationController::class , 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\authenticationController::class , 'register'])->name('register');
Route::resource('create', \App\Http\Controllers\authenticationController::class)->only(['create','index','show','store']);





Route::get('/myTickets', [\App\Http\Controllers\ManageTickets::class , 'index'])->name('tickets');



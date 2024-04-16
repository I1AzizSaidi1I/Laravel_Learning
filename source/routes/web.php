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
//Route::get('/register', [\App\Http\Controllers\authenticationController::class , 'create'])->name('register');
Route::resource('create', \App\Http\Controllers\authenticationController::class)->names([
    'create' => 'register.create'
]);


Route::get('/myTickets', [\App\Http\Controllers\ManageTickets::class , 'index'])->name('tickets');



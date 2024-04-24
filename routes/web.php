<?php

use App\Http\Controllers\{
    UserController, 
};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'create'])->name('user.create');
Route::post('/login', [UserController::class, 'store'])->name('user.store');
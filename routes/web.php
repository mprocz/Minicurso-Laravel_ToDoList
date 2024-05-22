<?php

use App\Http\Controllers\{
    UserController,
    SignInController,
    SignUpController
};

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('signin');
});

// Route::get('/signup', [UserController::class, 'create'])->name('user.create');

// Route::post('/signup', [UserController::class, 'store'])->name('user.store');

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [SignUpController::class, 'signup'])->name('signup');

Route::post('/signin', [SignInController::class, 'create'])->name('signin');

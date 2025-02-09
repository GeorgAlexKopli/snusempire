<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return redirect()->route('home'); 
});



Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/log-in', [LoginController::class, 'index'])
    ->name('log-in');
Route::post('/log-in', [LoginController::class, 'login'])->name('log-in.post');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');
    
        Route::post('register', [RegisteredUserController::class, 'store']);
    });
    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.auth');
Route::get('/confirmation', function(Request $request) {
    if(!$request->session()->get('confirmation_data_exist')) return redirect()->route('login.index');
    else
    return view('auth.verify');
    $request->session()->flush();
})->name('auth.confirmation');
Route::get('/email4reset', [ResetPasswordController::class, 'index'])->name('password.email4reset');
Route::post('/email', [ResetPasswordController::class, 'email'])->name('password.mail');
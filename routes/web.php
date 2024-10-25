<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'loginform'])->name('formlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('registrasi', [AuthController::class, 'registrasiform'])->name('formregistrasi');
Route::post('registrasi', [AuthController::class, 'registrasi'])->name('registrasi');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'loginform'])->name('formlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('registrasi', [AuthController::class, 'registrasiform'])->name('formregistrasi');
Route::post('registrasi', [AuthController::class, 'registrasi'])->name('registrasi');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.list');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('siswa/create/store', [SiswaController::class, 'store'])->name('siswa.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'loginform'])->name('formlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('registrasi', [AuthController::class, 'registrasiform'])->name('formregistrasi');
Route::post('registrasi', [AuthController::class, 'registrasi'])->name('registrasi');



//siswa route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard'); //dashboard admin

Route::get('/testindex', function () {
    return view('admin.test.index');
})->name('test.index');

Route::get('user',[UserController::class,'index'])->name('user.list');
Route::get('user/create',[UserController::class,'create'])->name('user.create');
Route::post('user/store',[UserController::class,'store'])->name('user.store');
Route::get('user/edit/{param1}',[UserController::class,'edit'])->name('user.edit');
Route::post('user/update',[UserController::class,'update'])->name('user.update');
Route::get('user/destroy/{param1}',[UserController::class,'destroy'])->name('user.destroy');

Route::get('siswa',[SiswaController::class,'index'])->name('siswa.list');
Route::get('siswa/create',[SiswaController::class,'create'])->name('siswa.create');
Route::post('siswa/store',[SiswaController::class,'store'])->name('siswa.store');
Route::get('siswa/edit/{param1}',[SiswaController::class,'edit'])->name('siswa.edit');
Route::post('siswa/update',[SiswaController::class,'update'])->name('siswa.update');
Route::get('siswa/destroy/{param1}',[SiswaController::class,'destroy'])->name('siswa.destroy');


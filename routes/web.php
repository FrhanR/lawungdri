<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', WelcomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', \App\Http\Livewire\Dashboard::class);
    Route::get('/layanan', \App\Http\Livewire\Layanan::class);
    Route::get('/transaksi', \App\Http\Livewire\Transaksi::class);
    Route::get('/progres', \App\Http\Livewire\Progres::class);
    Route::get('/pembayaran', \App\Http\Livewire\Pembayaran::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/karyawan', \App\Http\Livewire\Karyawan::class);
});

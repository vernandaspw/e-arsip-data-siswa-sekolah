<?php

use App\Http\Livewire\DataSiswaAlumniPage;
use App\Http\Livewire\DataSiswaMutasiPage;
use App\Http\Livewire\DataSiswaPage;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\KelolaAkunPage;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\ProfilPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('login', LoginPage::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomePage::class);
    Route::get('kelola-akun', KelolaAkunPage::class);
    Route::get('data-siswa', DataSiswaPage::class);
    Route::get('data-siswa-alumni', DataSiswaAlumniPage::class);
    Route::get('data-siswa-mutasi', DataSiswaMutasiPage::class);
    Route::get('profile', ProfilPage::class);
});

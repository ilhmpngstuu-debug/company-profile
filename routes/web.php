<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OutletController;

/*
|--------------------------------------------------------------------------
| Web Routes - GIOI GROUP Company Profile
|--------------------------------------------------------------------------
| 4 Menu Utama:
| 1. Beranda      - route('home')
| 2. Tentang Kami - route('about')
| 3. Outlet Kami  - route('outlets.index')  [Menu Utama Objek Tugas]
| 4. Kontak       - route('contact')
*/

// Menu 1: Beranda
Route::get('/', [PageController::class, 'home'])->name('home');

// Menu 2: Tentang Kami
Route::get('/about', [PageController::class, 'about'])->name('about');

// Menu 3: Outlet Kami (Daftar 10 Cabang Resmi dari Database)
Route::get('/outlets', [OutletController::class, 'index'])->name('outlets.index');
Route::get('/outlets/{slug}', [OutletController::class, 'show'])->name('outlets.show');

// Menu 4: Kontak & Reservasi
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

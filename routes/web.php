<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes - Website Company Profile
|--------------------------------------------------------------------------
| 4 Menu Utama:
| 1. Beranda      - route('home')
| 2. Tentang Kami - route('about')
| 3. Layanan      - route('services.index')
| 4. Kontak       - route('contact')
*/

// Menu 1: Beranda
Route::get('/', [PageController::class, 'home'])->name('home');

// Menu 2: Tentang Kami
Route::get('/about', [PageController::class, 'about'])->name('about');

// Menu 3: Layanan (Daftar 10 Data dari Database)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Menu 4: Kontak
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/search', [GalleryController::class, 'search'])->name('search');
    Route::get('/pricerange', [GalleryController::class, 'pricerange'])->name('pricerange');
    Route::get('/vip', [GalleryController::class, 'vip'])->name('vip');
    Route::get('/pvtinggal', [GalleryController::class, 'pvtinggal'])->name('pvtinggal');
    Route::get('/customer', [GalleryController::class, 'customer'])->name('customer');
    Route::get('/achievement', [GalleryController::class, 'achievement'])->name('achievement');
    Route::get('/absensi', [GalleryController::class, 'absensi'])->name('absensi');
    Route::get('/opname', [GalleryController::class, 'opname'])->name('opname');
    Route::get('/report', [GalleryController::class, 'report'])->name('report');
});

require __DIR__ . '/auth.php';

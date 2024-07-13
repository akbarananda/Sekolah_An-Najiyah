<?php

use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\DaftarController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/service', [HomeController::class, 'service'])->name('home.service');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('home.pendaftaran');
Route::get('/readmore-berita/{id}', [HomeController::class, 'readmoreBerita'])->name('home.readmoreBerita');
Route::get('/readmore-acara', [HomeController::class, 'readmoreAcara'])->name('home.readmoreAcara');

Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');
Route::resource('/admin/daftar', DaftarController::class)->names('admin.daftar');
Route::resource('/admin/acara', AcaraController::class)->names('admin.acara');
Route::resource('/daftar', DaftarController::class)->names('daftar');
Route::get('/download-pdf', [DaftarController::class, 'downloadPdf'])->name('admin.download');




Route::middleware('auth')->group(function () {
    Route::resource('admin/dashboard', DashboardController::class)->names('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'redirect'])->name('dashboard.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

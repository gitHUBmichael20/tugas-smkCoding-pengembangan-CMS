<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryImage;
use App\Http\Controllers\PembacaController;
use App\Models\Gallery;

// buka halaman gallery
Route::get('/gallery', [GalleryImage::class, 'index'])->name('gallery');

// Ambil data Gallery
Route::get('/galleries', function () {
   $galleries = Gallery::all(); // Ambil semua artikel
   return view('galleries', compact('galleries'));
});

// Kembali ke index
Route::get('/index', function () {
   return view('index');
})->name('index');

// Kembali ke index
Route::get('/', function () {
   return view('index');
})->name('index');

// Ke halaman gallery
Route::get('/gallery', [GalleryImage::class, 'index'])->name('gallery');

// Ke halaman dashboard admin
Route::get('/admin', function () {
   return view('dashboard-admin.dashboard-admin');
})->name('admin');

// Login untuk admin
Route::get('/login', function () {
   return view('dashboard-admin.admin-login');
})->name('admin-login');

Route::post('/admin-login', [PembacaController::class, 'login'])->name('admin.login.post');

// signup untuk admin
Route::get('/sign-up-admin', function () {
   return view('dashboard-admin.sign-up-admin');
})->name('admin-sign-up');

// About Pages
Route::get('/about-pages', function () {
   return view('about');
})->name('about-pages');
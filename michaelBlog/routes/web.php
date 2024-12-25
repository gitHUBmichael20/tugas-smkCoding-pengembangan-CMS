<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryImage;

// Landing Page
Route::get('/landing-pages', [ArticleController::class, 'index'])->name('landing-pages');

// Ambil Data gallery
Route::get('/gallery-images', [GalleryImage::class, 'index'])->name('gallery-images');

// Kembali ke index
Route::get('/index', function () {
   return view('index');
})->name('index');

// Kembali ke index
Route::get('/', function () {
   return view('index');
})->name('index');

// Ke halaman gallery
Route::get('/gallery', function () {
   return view('gallery.gallery');
})->name('gallery');

// Ke halaman dashboard admin
Route::get('/admin', function () {
   return view('dashboard-admin.dashboard-admin');
})->name('admin');

// Sign-up users
Route::get('/sign-up', function () {
   return view('auth.sign-up');
})->name('sign-up');

// Login untuk user
Route::get('/login', function () {
   return view('auth.login');
})->name('login');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryImage;
use App\Models\Gallery;

// Ambil data Gallery
Route::get('/galleries', function () {
   $galleries = Gallery::all();
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

Route::get('/admin', [GalleryImage::class, 'managePost']);


// Login untuk admin
Route::get('/login', function () {
   return view('dashboard-admin.admin-login');
})->name('admin-login');

// signup untuk admin
Route::get('/sign-up-admin', function () {
   return view('dashboard-admin.sign-up-admin');
})->name('admin-sign-up');

// About Pages
Route::get('/about-pages', function () {
   return view('about');
})->name('about-pages');
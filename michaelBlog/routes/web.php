<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryImage;
use App\Http\Controllers\DashboardAdminController;
use App\Models\Gallery;


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
Route::get('/admin-dashboard', [DashboardAdminController::class, 'index'])->name('admin');

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
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Home page with articles
Route::get('/', [ArticleController::class, 'index'])->name('home');

// Static pages
Route::get('/landing-pages', [ArticleController::class, 'index'])->name('landing-pages');
Route::get('/index', function () {
   return view('index');
})->name('index');
Route::get('/gallery', function () {
   return view('gallery.gallery');
})->name('gallery');
Route::get('/admin', function () {
   return view('dashboard-admin.dashboard-admin');
})->name('admin');

// Auth routes
Route::get('/sign-up', function () {
   return view('auth.sign-up');
})->name('sign-up');
Route::get('/login', function () {
   return view('auth.login');
})->name('login');
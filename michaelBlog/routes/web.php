<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryImage;
use App\Models\Article;
use App\Models\Gallery;

// Buka Halaman Landing Page
Route::get('/landing-pages', [ArticleController::class, 'index'])->name('landing-pages');
// Route::get('/landing-pages', [ArticleController::class, 'index'])->middleware('auth');


// buka halaman gallery
Route::get('/gallery', [GalleryImage::class, 'index'])->name('gallery');

// Ambil Data Artikel
Route::get('/articles', function () {
   $articles = Article::all(); // Ambil semua artikel
   return view('articles', compact('articles'));
});

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
})->name('admin')->middleware('auth:penulis');

// Sign-up users
Route::get('/sign-up', function () {
   return view('auth.sign-up');
})->name('sign-up');

// Login untuk user
Route::get('/login', function () {
   return view('auth.login');
})->name('login');

// Login untuk admin
Route::get('/admin-login', function () {
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

// prototype article
Route::get('/article-prototype', function () {
   return view('content.articles-page');
})->name('article-prototype');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/landing-pages', function () {
    return view('content.landing-pages');
})->name('landing-pages');

Route::get('/gallery', function () {
    return view('gallery.gallery');
})->name('gallery');

Route::get('/admin', function () {
    return view('dashboard-admin.dashboard-admin');
})->name('admin');

Route::get('/sign-up', function () {
    return view('auth.sign-up');
})->name('sign-up');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

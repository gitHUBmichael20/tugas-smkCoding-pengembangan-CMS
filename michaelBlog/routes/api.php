<?php

// use App\Http\Controllers\GalleryImage;

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/gallery', [DashboardAdminController::class, 'store'])->name('gallery.store');

Route::put('/gallery/{id}', [DashboardAdminController::class, 'update'])->name('gallery.update');

Route::delete('/gallery/{id}', [DashboardAdminController::class, 'destroy'])->name('gallery.destroy');
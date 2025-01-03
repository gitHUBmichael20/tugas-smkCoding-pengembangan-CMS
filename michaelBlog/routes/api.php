<?php

// use App\Http\Controllers\GalleryImage;

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\AdminAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/dashboard-admin', [DashboardAdminController::class, 'store'])->name('gallery.store');

Route::put('/dashboard-admin/{id}', [DashboardAdminController::class, 'update'])->name('gallery.update');

Route::delete('/dashboard-admin/{id}', [DashboardAdminController::class, 'destroy'])->name('gallery.destroy');

Route::post('/sign-up',[AdminAccount::class, 'store'])->name('gallery.store');

Route::post('/login', [AdminAccount::class, 'show'])->name('gallery.show');
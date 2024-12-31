<?php

use App\Http\Controllers\PembacaController;
use App\Http\Controllers\PenulisController;
// use App\Models\Penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth-user')->group(function () {
    Route::post('sign-up', [PembacaController::class, 'store'])->name('sign-up.store');
    Route::post('login', [PembacaController::class, 'login'])->name('login.user');
});

Route::prefix('auth-penulis')->group(function () {
    Route::post('sign-up', [PenulisController::class, 'store'])->name('sign-up-admin.store');
    Route::post('login', [PenulisController::class, 'login'])->name('login.admin');
});

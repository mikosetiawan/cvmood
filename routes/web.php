<?php

use App\Http\Controllers\cv\CvController;
use App\Http\Controllers\cv\CvTemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard Utama (Ringkasan)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Dashboard CV (Daftar semua CV)
    Route::get('/cv', [CvController::class, 'index'])->name('cv.index');
    // Kelola Template & Pembelian
    Route::get('/templates', [CvController::class, 'templates'])->name('templates.index')->middleware('permission:view_templates');
    Route::post('/purchase/{id}', [CvController::class, 'purchase'])->name('purchase.package');

    // Kelola CV
    Route::get('/cv/create/{template_id}', [CvController::class, 'createCv'])->name('cv.create')->middleware('permission:view_cv');
    Route::post('/cv/create/{template_id}', [CvController::class, 'storeCv'])->name('cv.store');

    // Kelola Template (CRUD)
    Route::resource('manage-templates', CvTemplateController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

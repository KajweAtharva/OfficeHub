<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;


// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Protected routes
Route::middleware('auth')->group(function () {

    // Dashboard (optional – Breeze default)
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');

    // Profile routes (Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Application routes
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
});

// Auth routes
require __DIR__.'/auth.php';

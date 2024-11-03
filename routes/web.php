<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

// Auth
Route::middleware(['auth'])->group(function () {
    // App
    Route::prefix('app')->group(function () {
        // Users
        Route::prefix('users')->group(function () {
            Route::get('/export', [UserController::class, 'export'])->name('users.export');
            Route::get('/new', [UserController::class, 'new'])->name('users.new');
            Route::post('/create', [UserController::class, 'create'])->name('users.create');
            Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('/update/{user}', [UserController::class, 'update'])->name('users.update');
            Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('/', [UserController::class, 'index'])->name('users');
        });

        // Profile Routes
        Route::prefix('profile')->group(function () {
            Route::post('/save_password', [ProfileController::class, 'save_password'])->name('profile.save_password');
            Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
            Route::get('/', [ProfileController::class, 'show'])->name('profile');
        });

        // Logs
        Route::prefix('logs')->group(function () {
            Route::get('/export', [LogController::class, 'export'])->name('logs.export');
            Route::get('/fetch', [LogController::class, 'fetch'])->name('logs.fetch');
            Route::get('/', [LogController::class, 'index'])->name('logs');
        });

        // Backup
        Route::prefix('backup')->group(function () {
            Route::get('/export', [BackupController::class, 'export'])->name('backup.export');
            Route::post('/import', [BackupController::class, 'import'])->name('backup.import');
            Route::get('/', [BackupController::class, 'index'])->name('backup');
        });

        // App
        Route::get('/', [AppController::class, 'index'])->name('app');
    });

    // Logout
    Route::get('/custom_logout', [HomeController::class, 'custom_logout'])->name('custom_logout');
});

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('welcome');

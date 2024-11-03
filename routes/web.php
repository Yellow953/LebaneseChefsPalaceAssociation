<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
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

        // Chefs
        Route::prefix('chefs')->group(function () {
            Route::get('/export', [ChefController::class, 'export'])->name('chefs.export');
            Route::get('/new', [ChefController::class, 'new'])->name('chefs.new');
            Route::post('/create', [ChefController::class, 'create'])->name('chefs.create');
            Route::get('/edit/{chef}', [ChefController::class, 'edit'])->name('chefs.edit');
            Route::post('/update/{chef}', [ChefController::class, 'update'])->name('chefs.update');
            Route::get('/delete/{chef}', [ChefController::class, 'destroy'])->name('chefs.destroy');
            Route::get('/', [ChefController::class, 'index'])->name('chefs');
        });

        // Restaurants
        Route::prefix('restaurants')->group(function () {
            Route::get('/export', [RestaurantController::class, 'export'])->name('restaurants.export');
            Route::get('/new', [RestaurantController::class, 'new'])->name('restaurants.new');
            Route::post('/create', [RestaurantController::class, 'create'])->name('restaurants.create');
            Route::get('/edit/{restaurant}', [RestaurantController::class, 'edit'])->name('restaurants.edit');
            Route::post('/update/{restaurant}', [RestaurantController::class, 'update'])->name('restaurants.update');
            Route::get('/delete/{restaurant}', [RestaurantController::class, 'destroy'])->name('restaurants.destroy');
            Route::get('/', [RestaurantController::class, 'index'])->name('restaurants');
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

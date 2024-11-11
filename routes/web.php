<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SettingsController;
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
            Route::post('/download_file/{chef}', [ChefController::class, 'download_file'])->name('chefs.download_file');
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

        // Settings
        Route::prefix('settings')->group(function () {
            // Backup
            Route::prefix('backup')->group(function () {
                Route::get('/export', [SettingsController::class, 'backup_export'])->name('settings.backup.export');
                Route::post('/import', [SettingsController::class, 'backup_import'])->name('settings.backup.import');
            });

            // Groups
            Route::prefix('groups')->group(function () {
                Route::post('/create', [SettingsController::class, 'groups_create'])->name('settings.groups.create');
                Route::get('/destroy/{group}', [SettingsController::class, 'groups_destroy'])->name('settings.groups.destroy');
            });

            Route::get('/', [SettingsController::class, 'index'])->name('settings');
        });

        // App
        Route::get('/', [AppController::class, 'index'])->name('app');
    });

    // Logout
    Route::get('/custom_logout', [HomeController::class, 'custom_logout'])->name('custom_logout');
});

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [HomeController::class, 'about'])->name('about');

//Institutes Pages Group
Route::prefix('institutes')->group(function () {
    // Institutes Page
    Route::get('/', [HomeController::class, 'institutes'])->name('institutes');
    //Individual Institutes Pages
    Route::get('/ghi', [HomeController::class, 'ghi'])->name('ghi');
    Route::get('/ghc', [HomeController::class, 'ghc'])->name('ghc');
    Route::get('/ghe', [HomeController::class, 'ghe'])->name('ghe');
    Route::get('/golden_book', [HomeController::class, 'golden_book'])->name('golden_book');
    Route::get('/staycare', [HomeController::class, 'staycare'])->name('staycare');
    Route::get('/costpitality', [HomeController::class, 'costpitality'])->name('costpitality');
});

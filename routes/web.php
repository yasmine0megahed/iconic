<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Switch between the included languages
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/', function () {
    return view('welcome');
});

// **dashboard routes
Route::prefix('admin-dashboard')
    ->name('dashboard.')
    ->group(function () {
        require __DIR__ . '/dashboard/admin.php';
        // require __DIR__ . '/dashboard/auth.php';

        Route::prefix('auth')
            ->name('auth.')
            ->group(function () {
                require __DIR__ . '/dashboard/setting.php';
            });
    });

// **frontend routes
Route::prefix('frontend')
    ->name('frontend.')
    ->group(function () {

        // require __DIR__ . '/frontend/home.php';
    });

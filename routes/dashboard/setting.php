<?php

use App\Http\Controllers\dashboard\SettingController;
use Illuminate\Support\Facades\Route;

// All route names are prefixed with 'auth.setting.'.
/*
     * Setting Management
     */

// Route::name('setting.')
//     ->prefix('setting')
//     ->group(function () {
//         Route::patch('update', [SettingController::class, 'update'])->name('update');
//         Route::patch('edit', [SettingController::class, 'update'])->name('edit');
//     });

Route::prefix('setting')
    ->name('setting.')
    ->group(function () {

        // Route::patch('edit/{setting}', [SettingController::class, 'edit'])
        //     ->name('edit');

        Route::patch('update/{setting}', [SettingController::class, 'update'])
            ->name('update');
    });

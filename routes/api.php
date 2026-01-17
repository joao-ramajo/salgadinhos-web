<?php

use App\Http\Controllers\Snack\CreateSnackController;
use App\Http\Controllers\Snack\ListSnackController;
use Illuminate\Support\Facades\Route;

// Snacks
Route::prefix('v1')->group(function() {
    Route::post('snacks', [CreateSnackController::class, 'handle'])->name('create.snacks');
    Route::get('snacks', [ListSnackController::class, 'handle'])->name('create.list');
});
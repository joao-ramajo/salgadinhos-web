<?php

use App\Http\Controllers\Snack\CreateSnackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Snacks
Route::prefix('v1')->group(function() {
    Route::post('snacks', [CreateSnackController::class, 'handle'])->name('create.snacks');
});
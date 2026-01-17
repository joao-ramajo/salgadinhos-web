<?php

use App\Http\Controllers\Comment\CreateCommentController;
use App\Http\Controllers\Web\ShowHomePageController;
use App\Http\Controllers\Web\ShowSnackListPageController;
use App\Http\Controllers\Web\ShowSnackPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomePageController::class)->name('web.home');
Route::get('/salgadinhos', ShowSnackListPageController::class)->name('web.snacks.list');
Route::get('/salgadinhos/{snack}', ShowSnackPageController::class)->name('web.snacks.show');

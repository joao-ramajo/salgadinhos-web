<?php

use App\Http\Controllers\Web\CreateSnackController;
use App\Http\Controllers\Web\CreateCommentController;
use App\Http\Controllers\Web\ShowCreateSnackFormController;
use App\Http\Controllers\Web\ShowHomePageController;
use App\Http\Controllers\Web\ShowSnackListPageController;
use App\Http\Controllers\Web\ShowSnackPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHomePageController::class)->name('web.home');
Route::get('/salgadinhos', ShowSnackListPageController::class)->name('web.snacks.list');
Route::get('/salgadinhos/{snack}', ShowSnackPageController::class)->name('web.snacks.show');
Route::get('/cadastro', ShowCreateSnackFormController::class)->name('web.snacks.create');
Route::post('/salgadinhos/{snack}/comentar', CreateCommentController::class)->name('snacks.comments.store');
Route::post('/salgadinhos/cadastrar', CreateSnackController::class)->name('snacks.create');

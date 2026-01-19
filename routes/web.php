<?php

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\LogoutController;
use App\Http\Controllers\Web\Auth\RegisterUserController;
use App\Http\Controllers\Web\Auth\ShowUpdateProfileController;
use App\Http\Controllers\Web\Auth\ShowUserProfileController;
use App\Http\Controllers\Web\Auth\UpdateUserProfileController;
use App\Http\Controllers\Web\CreateBrandController;
use App\Http\Controllers\Web\CreateSnackController;
use App\Http\Controllers\Web\CreateCommentController;
use App\Http\Controllers\Web\ShowCreateBrandFormController;
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
Route::get('/cadastrar-marca', ShowCreateBrandFormController::class)->name('web.brands.create');
Route::post('/cadastrar-marca', CreateBrandController::class)->name('brands.store');
Route::view('sobre', 'sobre');
Route::get('/perfil/{user}', ShowUserProfileController::class)->name('profile');
Route::get('/editar', ShowUpdateProfileController::class)->name('profile.show');
Route::put('/editar', UpdateUserProfileController::class)->name('profile.update');
Route::view('/cadastre-se', 'auth.register')->name('web.register');
Route::view('/login', 'auth.login')->name('web.login');


Route::post('/cadastre-se', RegisterUserController::class)->name('register');
Route::post('/logout', LogoutController::class)->name('logout');
Route::post('/login', LoginController::class)->name('login');
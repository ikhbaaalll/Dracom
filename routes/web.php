<?php

use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'showRegistrationForm']);
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')
    ->as('movie.')
    ->prefix('movies')
    ->group(function () {
        Route::get('recommendation', [HomeController::class, 'recommendation'])->name('recommendation');
        Route::get('myrating', [HomeController::class, 'rating'])->name('rating');
        Route::get('{movie}', [HomeController::class, 'show'])->name('show');
        Route::post('{movie}/rating', [HomeController::class, 'ratingStore'])->name('rating.store');
    });


Route::middleware('admin')
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('excel', [MovieController::class, 'excel'])->name('excel');
        Route::post('excel', [MovieController::class, 'excelStore'])->name('excel.store');
        Route::get('movies/{movie}/rating', [MovieController::class, 'rating'])->name('movies.rating');
        Route::resource('movies', MovieController::class);
    });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [BookController::class, 'index'])->name('home.index');
Route::get('search', SearchController::class)->name('search');
Route::resource('home', BookController::class)->only(['create', 'store']);

Route::middleware('guest')->group(function () {
    Route::resources([
        'login' => LoginController::class,
        'register' => RegisterController::class
    ], ['only' => ['index', 'store']]);
});

Route::middleware('auth')->group(function () {
    Route::resource('admin', AdminController::class);
    Route::post('logout', LogoutController::class)->name('logout');
    Route::get('filter', FilterController::class)->name('filter');
});

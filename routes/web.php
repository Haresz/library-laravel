<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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

Route::post('/add', [BooksController::class, 'store'])->name('formadd.store');
Route::put('/update', [BooksController::class, 'update'])->name('formupdate');
Route::get('/delete/{id}', [BooksController::class, 'destroy'])->name('destroy.listbuku');
Route::get('/edit/{id}', [BooksController::class, 'edit'])->name('edit.listbuku');
Route::get('/', [BooksController::class, 'index'])->name('listbuku');
Route::get('/search', [BooksController::class, 'search'])->name('search.listbuku');
Route::get('/add', function () {
    return view('formadd');
});
Route::get('/edit', function () {
    return view('formupdate');
});

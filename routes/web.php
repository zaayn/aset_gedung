<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/add_user', [App\Http\Controllers\UserController::class, 'insert'])->name('add.user');
Route::post('/store/user', [App\Http\Controllers\UserController::class, 'store'])->name('store.user');
Route::get('/delete/user/{id}',[App\Http\Controllers\UserController::class, 'delete'])->name('delete.user');
Route::get('/edit/user/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('edit.user');
Route::put('/update/user/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('update.user');

Route::get('/kampus', [App\Http\Controllers\KampusController::class, 'index'])->name('kampus');
Route::get('/add_kampus', [App\Http\Controllers\KampusController::class, 'insert'])->name('add.kampus');
Route::post('/store/kampus', [App\Http\Controllers\KampusController::class, 'store'])->name('store.kampus');
Route::get('/delete/kampus/{id}',[App\Http\Controllers\KampusController::class, 'delete'])->name('delete.kampus');
Route::get('/edit/kampus/{id}',[App\Http\Controllers\KampusController::class, 'edit'])->name('edit.kampus');
Route::put('/update/kampus/{id}',[App\Http\Controllers\KampusController::class, 'update'])->name('update.kampus');
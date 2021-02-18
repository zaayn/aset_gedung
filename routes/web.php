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

Route::get('/gedung', [App\Http\Controllers\GedungController::class, 'index'])->name('gedung');
Route::get('/add_gedung', [App\Http\Controllers\GedungController::class, 'insert'])->name('add.gedung');
Route::post('/store/gedung', [App\Http\Controllers\GedungController::class, 'store'])->name('store.gedung');
Route::get('/delete/gedung/{id}',[App\Http\Controllers\GedungController::class, 'delete'])->name('delete.gedung');
Route::get('/edit/gedung/{id}',[App\Http\Controllers\GedungController::class, 'edit'])->name('edit.gedung');
Route::put('/update/gedung/{id}',[App\Http\Controllers\GedungController::class, 'update'])->name('update.gedung');

Route::get('/ruang', [App\Http\Controllers\RuangController::class, 'index'])->name('ruang');
Route::get('/add_ruang', [App\Http\Controllers\RuangController::class, 'insert'])->name('add.ruang');
Route::post('/store/ruang', [App\Http\Controllers\RuangController::class, 'store'])->name('store.ruang');
Route::get('/delete/ruang/{id}',[App\Http\Controllers\RuangController::class, 'delete'])->name('delete.ruang');
Route::get('/edit/ruang/{id}',[App\Http\Controllers\RuangController::class, 'edit'])->name('edit.ruang');
Route::put('/update/ruang/{id}',[App\Http\Controllers\RuangController::class, 'update'])->name('update.ruang');
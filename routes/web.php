<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SantriController;

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
    return view('welcome');
});

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register']);
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('santri', [SantriController::class, 'santri'])->middleware('auth');
Route::get('santri/tambah', [SantriController::class, 'tambah'])->middleware('auth');
Route::post('tambah_santri', [SantriController::class, 'tambah_santri'])->name('tambah')->middleware('auth');
Route::get('santri/hapus/{id_santri}',[SantriController::class, 'hapus_santri'])->middleware('auth');
Route::get('santri/edit/{id_santri}', [SantriController::class, 'edit_santri'])->middleware('auth');
Route::post('actionedit',[SantriController::class, 'actionedit'])->name('actionedit')->middleware('auth');

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
use App\Models\Kategori;
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
    $kategoris = Kategori::all();
    return view('welcome', [
        'title' => 'Home',
        'kategoris' => $kategoris
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil'
    ]);
});

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');
Route::post('/aspirasi/{id}', [AspirasiController::class, 'update'])->name('aspirasi.update');
Route::delete('/aspirasi/{id}', [AspirasiController::class, 'destroy'])->name('aspirasi.delete');

Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi');

Route::get('/login', [AdminController::class, 'index'])->Middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'dashboard'])->Middleware('auth');

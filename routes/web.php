<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Routing web dashboard dosen
Route::get('/dashboard', 'App\Http\Controllers\DashboardDosenController@index');

Route::get('/daftar', [App\Http\Controllers\DospemController::class, 'index'])->name('daftar');
Route::get('/logbook', [App\Http\Controllers\LogbookController::class, 'index'])->name('logbook');
Route::get('/pengajuan', [App\Http\Controllers\PengajuanController::class, 'index'])->name('pengajuan');

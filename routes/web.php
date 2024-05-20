<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetailLogbookController;
use App\Http\Controllers\DospemBimbinganController;
use App\Http\Controllers\DospemController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\MahasiswaBimbinganController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SidangController;
use App\Http\Controllers\SidebarDosbingController;

use App\Http\Controllers\SidebarMahasiswaController;
use App\Http\Middleware\CheckRole;
use App\Models\LogbookBimbingan;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('post-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/home', [SidebarMahasiswaController::class, 'index'])->name('mahasiswa-dashboard');
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('mahasiswa-pengajuan');
    Route::get('/pengajuan-form', [PengajuanController::class, 'form'])->name('mahasiswa-pengajuan-form');
    Route::get('/pengajuan-draft', [PengajuanController::class, 'draft'])->name('mahasiswa-pengajuan-draft');
    Route::post('/pengajuan-submit', [PengajuanController::class, 'store'])->name('mahasiswa-pengajuan-submit');
    Route::get('/logbook', [LogbookController::class, 'index'])->name('mahasiswa-logbook');
    Route::get('/logbook/{id}', [DetailLogbookController::class, 'show'])->name('mahasiswa-logbook-detail');
    Route::post('/logbook/{id}', [DetailLogbookController::class, 'update'])->name('mahasiswa-logbook-update');
    Route::post('/logbook', [LogbookController::class, 'store'])->name('mahasiswa-logbook-create');
    Route::get('/sidang', [SidangController::class, 'index'])->name('mahasiswa-sidang');
    Route::get('/tentang', [AboutController::class, 'mahasiswa'])->name('mahasiswa-tentang');
    Route::get('/profile', [AboutController::class, 'profile'])->name('mahasiswa-profile');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosbing', [SidebarDosbingController::class, 'index'])->name('dosen-dashboard');
    Route::get('/logbookBimbingan', [DospemBimbinganController::class, 'index'])->name('dosbing-logbook');
    Route::post('/accLogbook', [DospemBimbinganController::class, 'update'])->name('update-dosbing-logbook');
    Route::get('/mahasiswa', [MahasiswaBimbinganController::class, 'index'])->name('mahasiswa-bimbingan');
    Route::get('/mahasiswa/{id}', [MahasiswaBimbinganController::class, 'detail'])->name('detail-mahasiswa-bimbingan');
    Route::post('/updatePengajuan/{id}', [MahasiswaBimbinganController::class, 'update'])->name('update-mahasiswa-bimbingan');
    Route::get('/detailMahasiswaBimbingan', [SidebarDosbingController::class, 'detail_mahasiswa_bimbingan']);
    Route::get('/daftarMahasiswaSidang', [SidebarDosbingController::class, 'daftar_mahasiswa_sidang'])->name('dosbing-daftar-mahasiswa-sidang');
    Route::get('/detailMahasiswaSidang', [SidebarDosbingController::class, 'detail_mahasiswa_sidang']);
    Route::get('/about', [AboutController::class, 'dosen'])->name('dosbing-about');
});

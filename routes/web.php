<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Koor\DashboardKoordinator;
use App\Http\Controllers\Koor\DataMhsKoor;
use App\Http\Controllers\Koor\DataDsnKoor;
use App\Http\Controllers\DetailLogbookController;
use App\Http\Controllers\DospemBimbinganController;
use App\Http\Controllers\Koor\ImportDosen;
use App\Http\Controllers\Koor\ImportMahasiswa;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\MahasiswaBimbinganController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SidangController;
use App\Http\Controllers\KoorController;
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
    Route::get('/dosen/{id}', [PengajuanController::class, 'show'])->name('mahasiswa-pengajuan-detail-dosen');
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
    Route::post('/mahasiswa/upload-foto', [MahasiswaController::class, 'uploadFoto'])->name('mahasiswa.upload_foto');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosbing', [SidebarDosbingController::class, 'index'])->name('dosen-dashboard');
    Route::get('/logbookBimbingan', [DospemBimbinganController::class, 'index'])->name('dosbing-logbook');
    Route::get('/logbookBimbinganList/{id}', [DospemBimbinganController::class, 'detail'])->name('dosbing-logbook-list');
    Route::get('/logbookBimbingan/{id}', [DospemBimbinganController::class, 'show'])->name('dosbing-logbook-detail');
    Route::post('/accLogbook', [DospemBimbinganController::class, 'update'])->name('update-dosbing-logbook');
    Route::get('/mahasiswa', [MahasiswaBimbinganController::class, 'index'])->name('mahasiswa-bimbingan');
    Route::get('/mahasiswa/{id}', [MahasiswaBimbinganController::class, 'detail'])->name('detail-mahasiswa-bimbingan');
    Route::post('/updatePengajuan/{id}', [MahasiswaBimbinganController::class, 'update'])->name('update-mahasiswa-bimbingan');
    Route::get('/detailMahasiswaBimbingan', [SidebarDosbingController::class, 'detail_mahasiswa_bimbingan']);
    Route::get('/daftarMahasiswaSidang', [SidebarDosbingController::class, 'daftar_mahasiswa_sidang'])->name('dosbing-daftar-mahasiswa-sidang');
    Route::get('/detailMahasiswaSidang', [SidebarDosbingController::class, 'detail_mahasiswa_sidang']);
    Route::get('/about', [AboutController::class, 'dosen'])->name('dosbing-about');
});

Route::middleware(['auth', 'role:koordinator'])->group(function () {
    Route::get('/koor', [DashboardKoordinator::class, 'index'])->name('koor-dashboard');
    Route::get('/dataMhs', [DataMhsKoor::class, 'index'])->name('koor-data-mahasiswa');
    Route::get('/dataMhs/{id}', [DataMhsKoor::class, 'show'])->name('koor-data-mahasiswa-detail');
    Route::post('/dataMhs/{id}', [DataMhsKoor::class, 'update'])->name('koor-data-mahasiswa-update');
    Route::post('/delMhs', [DataMhsKoor::class, 'destroy'])->name('koor-data-mahasiswa-delete');
    Route::post('/addMhs', [DataMhsKoor::class, 'store'])->name('koor-data-mahasiswa-add');
    Route::get('/dataDsn', [DataDsnKoor::class, 'index'])->name('koor-data-dospem');
    Route::post('/addDsn', [DataDsnKoor::class, 'store'])->name('koor-data-dospem-add');
    Route::get('/dataDsn/{id}', [DataDsnKoor::class, 'show'])->name('koor-data-dospem-detail');
    Route::post('/dataDsn/{id}', [DataDsnKoor::class, 'update'])->name('koor-data-dospem-update');
    Route::post('/delDsn', [DataDsnKoor::class, 'destroy'])->name('koor-data-dospem-delete');
    Route::post('/import', [ImportMahasiswa::class, 'import'])->name('import-mahasiswa');
    Route::post('/importDosen', [ImportDosen::class, 'import'])->name('import-dosen');
    Route::post('/addmahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::delete('/deletemahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
    Route::get('/tentangKoor', [AboutController::class, 'mahasiswa'])->name('koor-tentang');
});

// ADMINISTRATOR
Route::middleware(['auth', 'role:administrator'])->group(function () {

});

Route::get('/admin', [AdministratorController::class, 'index'])->name('admin-dashboard');
Route::get('/periodeAjaran', [AdministratorController::class, 'periode_ajaran'])->name('periode-ajaran');
Route::get('/logDosbim', [AdministratorController::class, 'log_dosbim'])->name('log-dosbim');
Route::get('/logMahasiswa', [AdministratorController::class, 'log_mahasiswa'])->name('log-mahasiswa');
Route::get('/aboutAdmin', [AdministratorController::class, 'about'])->name('admin-about');


<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetailLogbookController;
use App\Http\Controllers\DospemController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengajuanController;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('login');
});
// AKSES MAHASISWA
Route::get('/mahasiswa', [SidebarMahasiswaController::class, 'index']);
Route::get('/pengajuanTA', [SidebarMahasiswaController::class, 'pengajuan_ta']);
Route::get('/logbookTA', [SidebarMahasiswaController::class, 'logbook_ta']);
Route::get('/sidangTA', [SidebarMahasiswaController::class, 'pengajuan_sidang_ta']);
Route::get('/tentang', [SidebarMahasiswaController::class, 'tentang']);
Route::get('/profile', [SidebarMahasiswaController::class, 'profile']);

=======
>>>>>>> 7de543ad91a5038f77b61b1e56aeb36000aab283

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('post-login');

Route::middleware([CheckRole::class . ':mahasiswa'])->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [SidebarMahasiswaController::class, 'index'])->name('mahasiswa-dashboard');
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('mahasiswa-pengajuan');
    Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('mahasiswa-pengajuan');
    Route::get('/logbook', [LogbookController::class, 'index'])->name('mahasiswa-logbook');
    Route::get('/logbook/{id}', [DetailLogbookController::class, 'show'])->name('mahasiswa-logbook-detail');
    Route::post('/logbook/{id}', [DetailLogbookController::class, 'update'])->name('mahasiswa-logbook-update');
    Route::post('/logbook', [LogbookController::class, 'store'])->name('mahasiswa-logbook-create');
});

Route::middleware([CheckRole::class . ':dosen'])->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dosbing', [SidebarDosbingController::class, 'index'])->name('dosen-dashboard');
    Route::get('/daftarLogbookMahasiswa', [SidebarDosbingController::class, 'daftar_logbook_mahasiswa']);
    Route::get('/daftarMahasiswaBimbingan', [SidebarDosbingController::class, 'daftar_mahasiswa_bimbingan']);
    Route::get('/detailMahasiswaBimbingan', [SidebarDosbingController::class, 'detail_mahasiswa_bimbingan']);
    Route::get('/daftarMahasiswaSidang', [SidebarDosbingController::class, 'daftar_mahasiswa_sidang']);
    Route::get('/about', [SidebarDosbingController::class, 'about']);
});

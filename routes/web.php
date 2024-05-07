<?php

use App\Http\Controllers\SidebarMahasiswaController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/mahasiswa', [SidebarMahasiswaController::class, 'index']);
Route::get('/pengajuanTA', [SidebarMahasiswaController::class, 'pengajuan_ta']);
Route::get('/logbookTA', [SidebarMahasiswaController::class, 'logbook_ta']);
Route::get('/sidangTA', [SidebarMahasiswaController::class, 'pengajuan_sidang_ta']);
Route::get('/tentang', [SidebarMahasiswaController::class, 'tentang']);

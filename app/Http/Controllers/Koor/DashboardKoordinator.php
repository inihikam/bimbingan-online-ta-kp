<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusMahasiswa;
use App\Models\LogbookBimbingan;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class DashboardKoordinator extends Controller
{
    public function index()
{
    $mahasiswa = Mahasiswa::all();
    $logbookBimbingan = LogbookBimbingan::all();
    $dosen = Dosen::all();

    return view('koor.dashboard', compact('mahasiswa', 'logbookBimbingan', 'dosen'));
}
// Controller
// public function dashboard() {
//     $dosenNames = ['Dosen 1', 'Dosen 2', 'Dosen 3']; // Replace with your data
//     $mahasiswaPerDosen = [10, 15, 5]; // Replace with your data
//     $statusPengajuanLabels = ['Accepted', 'Pending', 'Rejected']; // Replace with your data
//     $statusPengajuanData = [5, 10, 3]; // Replace with your data

//     return view('koor.dashboard', compact('dosenNames', 'mahasiswaPerDosen', 'statusPengajuanLabels', 'statusPengajuanData'));
// }



}

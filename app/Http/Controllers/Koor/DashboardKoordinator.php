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
        $logbookBimbingan = LogbookBimbingan::with('mahasiswa.mahasiswa')->get();
//        dd($logbookBimbingan);
        $dosen = Dosen::all();

        return view('koor.dashboard', compact('mahasiswa', 'logbookBimbingan', 'dosen'));
    }

    public function tentang()
    {
        return view('koor.tentang');
    }
}

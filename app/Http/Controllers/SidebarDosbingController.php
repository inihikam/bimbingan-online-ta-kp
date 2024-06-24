<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\LogbookBimbingan;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;

class SidebarDosbingController extends Controller
{
    public function index()
    {
        // Mengambil id dosen yang sedang login
        $dosen = Dosen::where('email', auth()->user()->email)->first();
        $logbook = LogbookBimbingan::with('mahasiswa')->where('id_dsn', $dosen->id)->get();
        $status = StatusMahasiswa::all();
        $mhs = Mahasiswa::all();

        return view('dosbing.dashboard_dosbing', compact('dosen', 'logbook', 'status', 'mhs'));
    }

    public function daftar_logbook_mahasiswa()
    {
        return view('dosbing.daftar_logbook_mahasiswa.logbook_mahasiswa');
    }

    public function daftar_mahasiswa_bimbingan()
    {
        return view('dosbing.daftar_mahasiswa_bimbingan.mahasiswa_bimbingan');
    }

    public function detail_mahasiswa_bimbingan()
    {
        return view('dosbing.daftar_mahasiswa_bimbingan.detail_mahasiswa_bimbingan');
    }

    public function detail_mahasiswa_sidang()
    {
        return view('dosbing.daftar_mahasiswa_sidang.detail_mahasiswa_sidang');
    }

    public function daftar_mahasiswa_sidang()
    {
        return view('dosbing.daftar_mahasiswa_sidang.mahasiswa_sidang');
    }

    public function about()
    {
        return view('dosbing.about');
    }
}

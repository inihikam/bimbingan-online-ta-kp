<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\LogbookBimbingan;
use App\Models\StatusMahasiswa;

class SidebarMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil nama mahasiswa dan logbook dari tabel logbook yang berelasi dengan tabel mahasiswa

        // Mengambil data dari tabel mahasiswa tetapi berdasarkan user yang login karena user tidak ada nama dan tabel user berelasi dengan tabel mahasiswa
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('nim', $mahasiswa->nim)->first();
        // Lalu mengambil logbook dari mahasiswa di session sekarang
        $logbook = LogbookBimbingan::where('id_mhs', $status->id_mhs)->get();

        return view('mahasiswa.dashboard', compact('mahasiswa', 'logbook', 'status'));
    }

    public function pengajuan_ta()
    {
        return view('mahasiswa.pengajuan_ta.pengajuan_ta');
    }

    public function logbook_ta()
    {
        return view('mahasiswa.logbook_ta.logbook_ta');
    }

    public function pengajuan_sidang_ta()
    {
        return view('mahasiswa.pengajuan_sidang_ta.jadwal_sidang_ta');
    }

    public function profile()
    {
        return view('mahasiswa.profile');
    }
    public function tentang()
    {
        return view('mahasiswa.tentang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

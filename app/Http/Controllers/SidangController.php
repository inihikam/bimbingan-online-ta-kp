<?php

namespace App\Http\Controllers;

use App\Models\LogbookBimbingan;
use App\Models\StatusMahasiswa;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use App\Models\PengajuanSidang;
use Illuminate\Http\Request;
use App\Models\JadwalSidang;

class SidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $detailmhs = StatusMahasiswa::where('nim', $mhs->nim)->first();
        if ($detailmhs->sidang_ta_1 == 'NOT_TAKEN') {
            $logbook = LogbookBimbingan::where('id_mhs', $detailmhs->id_mhs)
                ->where('bab_terakhir_bimbingan', '3')
                ->where('status_logbook', 'ACC')
                ->get();

            $jadwal = JadwalSidang::all();
            return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal', compact('logbook', 'jadwal'));
        } elseif ($detailmhs->sidang_ta_2 == 'NOT_TAKEN') {
            $logbook = LogbookBimbingan::where('id_mhs', $detailmhs->id_mhs)
                ->where('bab_terakhir_bimbingan', '5')
                ->where('status_logbook', 'ACC')
                ->get();

            $jadwal = JadwalSidang::all();
            return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal', compact('logbook', 'jadwal'));
        }
        return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal');
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
        $data = $request->all();
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $detailmhs = StatusMahasiswa::where('nim', $mhs->nim)->first();
        $ta = Pengajuan::where('id_mhs', $detailmhs->id_mhs)->first();
        PengajuanSidang::create([
            'id_mhs' => $ta->id_mhs,
            'id_dospem' => $ta->id_dospem,
            'judul' => $ta->judul,
            'bidang_kajian' => $ta->bidang_kajian,
            'dokumen' => $data['dokumen'],
            'jadwal_sidang' => $data['jadwal_sidang'],
        ]);

        return redirect()->route('sidang.index');
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

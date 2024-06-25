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
    public function index()
    {
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $detailmhs = StatusMahasiswa::where('id_mhs', $mhs->id)->first();
        if ($detailmhs->sidang_ta_1 == 'BELUM') {
            $logbook = LogbookBimbingan::where('id_mhs', $detailmhs->id_mhs)
                ->where('bab', '3')
                ->where('status', 'ACC')
                ->get();

            return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal', compact('logbook'));
        } elseif ($detailmhs->sidang_ta_2 == 'BELUM') {
            $logbook = LogbookBimbingan::where('id_mhs', $detailmhs->id_mhs)
                ->where('bab_terakhir_bimbingan', '5')
                ->where('status_logbook', 'ACC')
                ->get();

            return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal', compact('logbook'));
        }
        return view('mahasiswa.pengajuan_sidang_ta.pilih_jadwal');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $detailmhs = StatusMahasiswa::where('id_mhs', $mhs->id)->first();
        $ta = Pengajuan::where('id_mhs', $detailmhs->id_mhs)->first();
        PengajuanSidang::create([
            'id_mhs' => $ta->id_mhs,
            'id_dsn' => $ta->id_dsn,
            'judul' => $ta->judul,
            'bidang_kajian' => $ta->bidang_kajian,
            'dokumen' => $data['dokumen'],
        ]);

        activity()
            ->inLog('Pengajuan Sidang')
            ->causedBy($mhs)
            ->performedOn($ta)
            ->withProperties(['id_mhs' => $mhs->id])
            ->log('Pengajuan Sidang TA');

        return redirect()->route('sidang.index');
    }
}

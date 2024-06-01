<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use App\Models\StatusMahasiswa;
use App\Models\HistoryPengajuan;
use Illuminate\Http\Request;

class MahasiswaBimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $dosen = Dosen::where('email', $user->email)->first();
        // $pengajuan = Pengajuan::where('id_dosen', $dosen->id_dospem)->paginate(10);
        // Cara mengambil data pengajuan yang belum di tolak
        $pengajuan = Pengajuan::where('id_dospem', $dosen->id_dospem)->where('status', '!=', 'TOLAK')->paginate(10);
        $mahasiswa = StatusMahasiswa::all();
        $bimbingan = Mahasiswa::all();

        return view('dosbing.daftar_mahasiswa_bimbingan.mahasiswa_bimbingan', compact('pengajuan', 'mahasiswa', 'bimbingan'));
    }
    public function detail($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $status = StatusMahasiswa::where('id_mhs', $pengajuan->id_mhs)->first();
        $mahasiswa = Mahasiswa::where('nim', $status->nim)->first();
        return view('dosbing.daftar_mahasiswa_bimbingan.detail_mahasiswa_bimbingan', compact('pengajuan', 'mahasiswa'));
    }
    public function update(Request $request, string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        if ($request->status == 'TOLAK') {
            $history = new HistoryPengajuan();
            $history->id_mhs = $pengajuan->id_mhs;
            $history->topik = $pengajuan->topik;
            $history->judul = $pengajuan->judul;
            $history->bidang_kajian = $pengajuan->bidang_kajian;
            $history->keyword = $pengajuan->keyword;
            $history->deskripsi = $pengajuan->deskripsi;
            $history->catatan = $pengajuan->catatan;
            $history->id_dospem = $pengajuan->id_dospem;
            $history->status = $request->status;
            $history->alasan_penolakan = "Pengajuan Ditolak karena topik tidak relevan";
            $history->save();
            $pengajuan->delete();
        } else {
            $status = StatusMahasiswa::findOrFail($pengajuan->id_mhs);
            $status->id_dospem = $pengajuan->id_dospem;
            $status->save();
            $pengajuan->status = $request->status;
            $pengajuan->save();
        }

        return redirect()->route('mahasiswa-bimbingan');
    }
}

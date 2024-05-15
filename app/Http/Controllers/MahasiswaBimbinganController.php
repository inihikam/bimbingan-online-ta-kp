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
        $pengajuan->status = $request->status;

        $pengajuan->save();

        return redirect()->route('mahasiswa-bimbingan');
    }
}

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
    public static function student(string $nim): string
    {
        $parts = explode(".", $nim);
        $faculty = substr($parts[0], 0, 1);
        $department = $parts[0];
        $entryYear = $parts[1];
        return "https://mahasiswa.dinus.ac.id/images/foto/$faculty/$department/$entryYear/$nim.jpg";
    }

    public function index()
    {
        $dosen = Dosen::where('email', auth()->user()->email)->first();
        // Cara mengambil data pengajuan yang belum di tolak
        $pengajuan = Pengajuan::with('mahasiswa.mahasiswa')
            ->where('id_dsn', $dosen->id)
            ->where('status', '!=', 'TOLAK')
            ->get();

        return view('dosbing.daftar_mahasiswa_bimbingan.mahasiswa_bimbingan', compact('pengajuan'));
    }

    public function detail($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $status = StatusMahasiswa::where('id_mhs', $pengajuan->id_mhs)->first();
        $mahasiswa = Mahasiswa::where('id', $status->id_mhs)->first();
        $photo = self::student($mahasiswa->nim);
        dd($photo);
        return view('dosbing.daftar_mahasiswa_bimbingan.detail_mahasiswa_bimbingan', compact('pengajuan', 'mahasiswa', 'photo'));
    }

    public function update(Request $request, string $id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        if ($request->status == 'TOLAK') {
            $pengajuan->status = $request->status;
            $pengajuan->alasan = $request->alasan;
            $pengajuan->save();

            activity()
                ->inLog('pengajuan')
                ->causedBy(auth()->user())
                ->subject($pengajuan)
                ->log('Menolak pengajuan pengajuan');
        } else {
            $status = StatusMahasiswa::findOrFail($pengajuan->id_mhs);
            $status->id_dsn = $pengajuan->id_dsn;
            $status->save();
            $pengajuan->status = $request->status;
            $pengajuan->save();

            activity()
                ->inLog('pengajuan')
                ->causedBy(auth()->user())
                ->subject($pengajuan)
                ->log('Update status pengajuan');
        }

        return redirect()->route('mahasiswa-bimbingan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\DosenPeriodik;
use App\Models\Mahasiswa;
use App\Models\Pengajuan;
use App\Models\Periode;
use App\Models\StatusDosen;
use App\Models\StatusMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            ->where('status', 'PENDING')
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

    public function update(Request $request)
    {
        try {
//            dd($request->all());
            $pengajuan = Pengajuan::findOrFail($request->id);

            $periode = Periode::where('status', 1)->first();
            $dsnPeriod = DosenPeriodik::where('id_periode', $periode->id)->where('id_dsn', $pengajuan->id_dsn)->first();
            $dsnStatus = StatusDosen::where('id_period', $dsnPeriod->id)->first();

            if ($request->status == 'TOLAK') {
                $pengajuan->status = $request->status;
                $pengajuan->alasan = $request->alasan;
                $pengajuan->save();

                $dsnStatus->ajuan--;
                $dsnStatus->save();

                activity()
                    ->inLog('pengajuan')
                    ->causedBy(auth()->user())
                    ->performedOn($pengajuan)
                    ->withProperties(['id_mhs' => $pengajuan->id_mhs])
                    ->log('Menolak pengajuan pengajuan');

                return response()->json(['status' => 'success', 'message' => 'Pengajuan berhasil ditolak']);
            } else {
                $status = StatusMahasiswa::findOrFail($pengajuan->id_mhs);
                $status->id_dsn = $pengajuan->id_dsn;
                $status->save();
                $pengajuan->status = $request->status;
                $pengajuan->save();

                $dsnStatus->ajuan--;
                $dsnStatus->diterima++;
                $dsnStatus->sisa = $dsnStatus->kuota - $dsnStatus->diterima;

                $dsnStatus->save();

                activity()
                    ->inLog('pengajuan')
                    ->causedBy(auth()->user())
                    ->performedOn($pengajuan)
                    ->withProperties(['id_mhs' => $pengajuan->id_mhs])
                    ->log('Update status pengajuan');

                return redirect()->route('mahasiswa-bimbingan');
            }
        } catch (\Exception $e) {
            Log::error($e); // Logging error
            return response()->json(['status' => 'error', 'message' => 'Terjadi kesalahan'], 500);
        }

//        return redirect()->route('mahasiswa-bimbingan');
    }
}

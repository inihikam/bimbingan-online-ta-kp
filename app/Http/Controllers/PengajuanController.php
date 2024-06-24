<?php

namespace App\Http\Controllers;

use App\Models\DosenPeriodik;
use App\Models\Periode;
use App\Models\StatusDosen;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\HistoryPengajuan;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode = Periode::where('status', true)->first();
        $dsnPeriod = DosenPeriodik::where('id_periode', $periode->id)->with('dosen', 'status')->get();
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('id_mhs', $mhs->id)->first();
        $history = Pengajuan::where('id_mhs', $status->id_mhs)->where('status', 'TOLAK')->get();
        $data = false;
        if (Pengajuan::where('id_mhs', $status->id_mhs)->first() != null) {
            $pengajuan = Pengajuan::where('id_mhs', $status->id_mhs)
            ->whereIn('status', ['ACC', 'PENDING'])->first();
            $dospil = Dosen::where('id', $pengajuan->id_dsn)->first();
            return view('mahasiswa.pengajuan_ta.draft_pengajuan_ta', compact(
                'dsnPeriod',
                'mhs',
                'status',
                'pengajuan',
                'history',
                'dospil',
                'data'
            ));
        }

        return view('mahasiswa.pengajuan_ta.pilih_dosbing', compact('dsnPeriod', 'status'));
    }

    public function form(Request $request)
    {
        $data = $request->all();
        return view('mahasiswa.pengajuan_ta.form_pengajuan', compact('data'));
    }

    public function draft(Request $request)
    {
        $data = $request->all();
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('id_mhs', $mahasiswa->id)->first();
        $dospil = Dosen::where('id', $data['id_dospem'])->first();
        $history = Pengajuan::with('dosen')->where('id_mhs', $status->id_mhs)->where('status', 'TOLAK')->get();
        return view('mahasiswa.pengajuan_ta.draft_pengajuan_ta', compact(
            'data',
            'mahasiswa',
            'status',
            'dospil',
            'history'
        ));
    }

    public function pengajuan()
    {
        // Mengambil semua data dosen pembimbing dari tabel dosen pembimbing untuk ditampilkan
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
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('id_mhs', $mahasiswa->id)->first();

        $pengajuan = new Pengajuan();
        $pengajuan->id_mhs = $status->id_mhs;
        $pengajuan->jalur = $data['jalur'];
        $pengajuan->topik = $data['topik'];
        $pengajuan->judul = $data['judul'];
        $pengajuan->bidang_kajian = $data['bidang_kajian'];
        $pengajuan->minat = $data['minat'];
        $pengajuan->deskripsi = $data['deskripsi'];
        $pengajuan->id_dsn = $data['id_dsn'];

        $pengajuan->save();

        $periode = Periode::where('status', true)->first();
        $dosenPeriodik = DosenPeriodik::where('id_periode', $periode->id)->where('id_dsn', $data['id_dsn'])->first();
        $statusDosen = StatusDosen::where('id_period', $dosenPeriodik->id)->first();
        $statusDosen->ajuan = $statusDosen->ajuan + 1;

        $statusDosen->update();

        activity()
            ->inLog('Pengajuan')
            ->causedBy($mahasiswa)
            ->subject($pengajuan->id_dsn)
            ->log('melakukan pengajuan tugas akhir');
        return redirect()->route('mahasiswa-pengajuan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_dospem)
    {
        $dosen = Dosen::find($id_dospem);
        return response()->json($dosen);
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

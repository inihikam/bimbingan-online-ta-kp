<?php

namespace App\Http\Controllers;

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
        $dosens = Dosen::paginate(10);
        $mhs = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('nim', $mhs->nim)->first();
        $history = HistoryPengajuan::where('id_mhs', $status->id_mhs)->get();
        $data = false;
        if (Pengajuan::where('id_mhs', $status->id_mhs)->first() != null) {
            $pengajuan = Pengajuan::where('id_mhs', $status->id_mhs)->first();
            $dospil = Dosen::where('id_dospem', $pengajuan->id_dospem)->first();
            return view('mahasiswa.pengajuan_ta.draft_pengajuan_ta', compact(
                'dosens',
                'mhs',
                'status',
                'pengajuan',
                'dospil',
                'history',
                'data'
            ));
        }

        return view('mahasiswa.pengajuan_ta.pilih_dosbing', compact('dosens', 'status'));
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
        $status = StatusMahasiswa::where('nim', $mahasiswa->nim)->first();
        $dospil = Dosen::where('id_dospem', $data['id_dospem'])->first();
        $history = HistoryPengajuan::where('id_mhs', $status->id_mhs)->get();
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
        $status = StatusMahasiswa::where('nim', $mahasiswa->nim)->first();

        $pengajuan = new Pengajuan();
        $pengajuan->id_mhs = $status->id_mhs;
        $pengajuan->topik = $data['topik'];
        $pengajuan->judul = $data['judul'];
        $pengajuan->bidang_kajian = $data['bidang_kajian'];
        $pengajuan->keyword = $data['keyword'];
        $pengajuan->deskripsi = $data['deskripsi'];
        $pengajuan->catatan = $data['catatan'];
        $pengajuan->id_dospem = $data['catatan'];

        $pengajuan->save();

        return redirect()->route('mahasiswa-pengajuan');
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

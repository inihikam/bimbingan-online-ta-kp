<?php

namespace App\Http\Controllers;

use App\Models\LogbookBimbingan;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan data logbook dari tabel logbook dan paginate 10 data per halaman. data logbook sesuai dengan user yang login saat ini
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('id_mhs', $mahasiswa->id)->first();
        $logbook = LogbookBimbingan::where('id_mhs', $status->id_mhs)->get();

        return view('mahasiswa.logbook_ta.logbook_ta', compact('logbook', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menambah data logbook dari form yang ada di halaman logbook_ta

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menyimpan data logbook yang diinputkan dari form ke dalam tabel logbook
        $mahasiswa = Mahasiswa::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::where('id_mhs', $mahasiswa->id)->first();
        $logbook = new LogbookBimbingan();
        $logbook->id_mhs = $status->id_mhs;
        $logbook->id_dsn = $status->id_dsn;
        // Aku ingin mengambil tanggal saat request ini dibuat, di database menggunakan tipe data DATE
        $logbook->tanggal = $request->tanggal;
        $logbook->bab = $request->bab;
        $logbook->uraian = $request->uraian;
        $logbook->dokumen = $request->dokumen;

        $logbook->save();

//        Mengambil data bab_terakhir_bimbingan paling baru untuk dimasukkan ke dalam tabel status mahasiswa
        $status->bab_terakhir = $request->bab;
        $status->jml_bimbingan = LogbookBimbingan::where('id_mhs', $status->id_mhs)->count();

        $status->save();

        activity()
            ->inLog('logbook')
            ->causedBy($mahasiswa)
            ->subject($logbook)
            ->log('menambahkan logbook');
        return redirect()->route('mahasiswa-logbook');
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

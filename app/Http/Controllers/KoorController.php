<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class KoorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan data dosen pembimbing dari tabel dosen
        $dospem = Dosen::all();

        // Mengirimkan data dospem ke view dengan variabel 'dospem'
        return view('koor.dashboard', ['dospem' => $dospem]);
    }

    /**
     * Display dashboard with charts.
     */
    public function dashboard() {
        $dosenNames = ['Dosen 1', 'Dosen 2', 'Dosen 3']; // Ganti dengan data dari database
        $mahasiswaPerDosen = [10, 15, 5]; // Ganti dengan data dari database
        $statusPengajuanLabels = ['Accepted', 'Pending', 'Rejected']; // Ganti dengan data dari database
        $statusPengajuanData = [5, 10, 3]; // Ganti dengan data dari database

        return view('koor.dashboard', compact('dosenNames', 'mahasiswaPerDosen', 'statusPengajuanLabels', 'statusPengajuanData'));
    }

    /**
     * Display data mahasiswa.
     */
    public function dataMahasiswa()
    {
        // Mendapatkan data mahasiswa
        $mahasiswa = Mahasiswa::all();

        // Mengirimkan data mahasiswa ke view 'koor.data_mahasiswa'
        return view('koor.data_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Display data dosen pembimbing.
     */
    public function dataDospem()
    {
        // Mendapatkan data dosen pembimbing
        $dospem = Dosen::all();

        // Mengirimkan data dosen pembimbing ke view 'koor.data_dospem'
        return view('koor.data_dospem', ['dospem' => $dospem]);
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

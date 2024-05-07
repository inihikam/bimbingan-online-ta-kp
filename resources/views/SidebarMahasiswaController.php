<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    public function pengajuan_ta()
    {
        return view('mahasiswa.pengajuan_ta.pengajuan_ta');
    }

    public function logbook_ta()
    {
        return view('mahasiswa.logbook_ta.logbook_ta');
    }

    public function pengajuan_sidang_ta()
    {
        return view('mahasiswa.pengajuan_sidang_ta.jadwal_sidang_ta');
    } 

    public function tentang()
    {
        return view('mahasiswa.tentang');
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

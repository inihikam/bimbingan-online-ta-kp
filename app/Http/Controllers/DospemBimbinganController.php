<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\LogbookBimbingan;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use Illuminate\Http\Request;

class DospemBimbinganController extends Controller
{
    public function index()
    {
        $dosen = Dosen::where('email', auth()->user()->email)->first();
        $status = StatusMahasiswa::with('mahasiswa')->where('id_dsn', $dosen->id)->get();

        return view(
            'dosbing.daftar_logbook_mahasiswa.logbook_mahasiswa',
            compact('dosen', 'status')
        );
    }

    public function detail($id)
    {
        $logbook = LogbookBimbingan::where('id_mhs', $id)->get();
        return response()->json($logbook);
    }

    public function update(Request $request)
    {
        $logbook = LogbookBimbingan::findOrFail($request->id_logbook);
        $logbook->status_logbook = $request->status;
        $logbook->save();

        $mahasiswa = Mahasiswa::where('id', $logbook->id_mhs)->first();

        activity()
            ->inLog('logbook')
            ->causedBy($mahasiswa)
            ->performedOn($logbook)
            ->withProperties(['id_mhs' => $logbook->id_mhs])
            ->log('Update status logbook');

        return redirect()->back();
    }

    public function show($id)
    {
        $logbook = LogbookBimbingan::where('id_mhs', $id)->get();
        return response()->json($logbook);
    }
}

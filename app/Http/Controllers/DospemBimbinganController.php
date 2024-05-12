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
        $user = auth()->user();
        $dosen = Dosen::where('email', $user->email)->first();
        $logbook = LogbookBimbingan::where('id_dospem', $dosen->id_dospem)->paginate(10);
        $status = StatusMahasiswa::all();
        $mahasiswa = Mahasiswa::all();

        return view(
            'dosbing.daftar_logbook_mahasiswa.logbook_mahasiswa',
            compact('dosen', 'logbook', 'status', 'mahasiswa')
        );
    }

    public function update(Request $request)
    {
        $logbook = LogbookBimbingan::findOrFail($request->id_logbook);
        $logbook->status_logbook = $request->status;
        $logbook->save();

        return redirect()->back();
    }
}

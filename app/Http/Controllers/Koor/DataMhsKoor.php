<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use Illuminate\Http\Request;

class DataMhsKoor extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('statusMahasiswa')->get();
        return view('koor.data_mahasiswa.crud_mhs', compact('mahasiswa'));
    }
    public function show($id)
    {
        $status = StatusMahasiswa::where('id_mhs', $id)->first();
        $mahasiswa = Mahasiswa::with('statusMahasiswa.dospem')->where('nim', $status->nim)->first();
        // Mengembalikan 3 data di atas menggunakan json
        return response()->json([
            'mahasiswa' => $mahasiswa,
        ]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        $mahasiswa = Mahasiswa::where('nim', $data['oldNim'])->first();

        $mahasiswa->nim = $data['nim'];
        $mahasiswa->nama = $data['nama'];
        $mahasiswa->ipk = $data['ipk'];
        $mahasiswa->transkrip_nilai = $data['transkrip_nilai'];
        $mahasiswa->telp_mhs = $data['telp_mhs'];
        $mahasiswa->email = $data['email'];
        $mahasiswa->dosen_wali = $data['dosen_wali'];

        $mahasiswa->update();

        return redirect()->route('koor-data-mahasiswa');
    }
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->transkrip_nilai = $request->transkrip_nilai;
        $mahasiswa->telp_mhs = $request->telp_mhs;
        $mahasiswa->email = $request->email;
        $mahasiswa->dosen_wali = $request->dosen_wali;
        $mahasiswa->save();

        $status = new StatusMahasiswa();
        $status->nim = $request->nim;
        $status->save();

        return redirect()->route('koor-data-mahasiswa');
    }
    public function destroy(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        $mahasiswa->delete();

        return redirect()->route('koor-data-mahasiswa');
    }
}

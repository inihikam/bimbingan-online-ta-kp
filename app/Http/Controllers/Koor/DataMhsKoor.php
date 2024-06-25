<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use App\Models\User;
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
        $mahasiswa = Mahasiswa::with('statusMahasiswa.dospem')->where('id', $status->id_mhs)->first();
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

        if ($mahasiswa->email != $data['email']) {
            $clean = str_replace(['A', '.'], ['1', ''], $data['email']);
            $fix = explode('@', $clean)[0];
            $user = User::where('email', $mahasiswa->email)->first();
            $user->email = $data['email'];
            $user->password = bcrypt($fix);

            $user->update();
        }

        $mahasiswa->email = $data['email'];
        $mahasiswa->dosen_wali = $data['dosen_wali'];

        $mahasiswa->update();

        activity()
            ->inLog('Data Mahasiswa')
            ->causedBy(auth()->user())
            ->subject($mahasiswa)
            ->log('Mengubah data mahasiswa');

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

        if ($request->email) {
            $clean = str_replace(['A', '.'], ['1', ''], $request->email);
            $fix = explode('@', $clean)[0];
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($fix),
            ]);

            $user->assignRole('mahasiswa');
        }

        activity()
            ->inLog('Data Mahasiswa')
            ->causedBy(auth()->user())
            ->subject($mahasiswa)
            ->log('Menambahkan data mahasiswa');

        return redirect()->route('koor-data-mahasiswa');
    }

    public function destroy(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        $user = User::where('email', $mahasiswa->email)->first();

        activity()
            ->inLog('Data Mahasiswa')
            ->causedBy(auth()->user())
            ->log('Menghapus data mahasiswa dengan nama ' . $mahasiswa->nama);

        $user->delete();
        $mahasiswa->delete();

        return redirect()->route('koor-data-mahasiswa');
    }
}

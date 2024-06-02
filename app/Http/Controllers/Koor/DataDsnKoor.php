<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\StatusMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class DataDsnKoor extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('koor.data_dospem.crud_dospem', compact('dosen'));
    }
    public function show($id)
    {
        // Mengambil data list status mahasiswa dari dosen menurut id_dospem pada tabel status mahasiswa
        $dsn = Dosen::with('mahasiswa.mahasiswa')->where('id_dospem', $id)->get();
        return response()->json([
            'dsn' => $dsn,
        ]);
    }
    public function store(Request $request)
    {
        $dosen = new Dosen();
        $dosen->npp = $request->npp;
        $dosen->nama = $request->nama;
        $dosen->bidang_kajian = $request->bidang_kajian;
        $dosen->kuota_mhs_ta = $request->kuota_mhs_ta;
        $dosen->email = $request->email;
        $dosen->save();

        if ($request->email) {
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt(explode('@', $request->email)[0]),
            ]);

            $user->assignRole('dosen');
        }

        return redirect()->route('koor-data-dospem');
    }
    public function update(Request $request)
    {
        $data = $request->all();
        $dosen = Dosen::where('id_dospem', $data['id_dospem'])->first();

        $dosen->npp = $data['npp'];
        $dosen->nama = $data['nama'];
        $dosen->bidang_kajian = $data['bidang_kajian'];
        $dosen->kuota_mhs_ta = $data['kuota_mhs_ta'];

        if ($dosen->email != $data['email']) {
            $user = User::where('email', $dosen->email)->first();
            $user->email = $data['email'];
            $user->password = bcrypt(explode('@', $data['email'])[0]);

            $user->update();
        }

        $dosen->email = $data['email'];
        $dosen->update();

        return redirect()->route('koor-data-dospem');
    }
    public function destroy(Request $request)
    {
        $dosen = Dosen::where('id_dospem', $request->id_dospem)->first();
        $user = User::where('email', $dosen->email)->first();
        $user->delete();

        $status = StatusMahasiswa::where('id_dospem', $request->id_dospem)->get();

        foreach ($status as $item) {
            $item->id_dospem = 0;
            $item->update();
        }

        $dosen->delete();

        return redirect()->route('koor-data-dospem');
    }
}

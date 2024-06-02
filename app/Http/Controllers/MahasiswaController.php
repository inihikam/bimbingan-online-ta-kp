<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function uploadFoto(Request $request)
    {
        Log::info('Mulai proses upload foto profil mahasiswa');

        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Asumsikan mahasiswa terkait pengguna yang sedang login
        $user = auth()->user();
        $mahasiswa = Mahasiswa::where('email', $user->email)->first();

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($mahasiswa->foto) {
                Storage::delete('public/' . $mahasiswa->foto);
                Log::info('Foto lama berhasil dihapus');
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('foto_mahasiswa', 'public');
            $mahasiswa->foto = $path;
            $mahasiswa->save();
            Log::info('Foto baru berhasil disimpan');
        }

        Log::info('Proses upload foto profil mahasiswa selesai');

        return redirect()->back()->with('success', 'Foto profil berhasil diunggah.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa  ',
            'nama' => 'required',
            'ipk' => 'required',
            'transkrip_nilai' => 'required',
            'telp_mhs' => 'required',
            'email' => 'required|email|unique:mahasiswa',
            'dosen_wali' => 'required',
        ]);

        Mahasiswa::create($request->all());
        

        return redirect()->route('koor-data-mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan.');

    }

    public function destroy($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->delete();

    return redirect()->route('koor-data-mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus.');
}

}

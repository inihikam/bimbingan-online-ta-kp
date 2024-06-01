<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function uploadFoto(Request $request)
    {
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
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('foto_mahasiswa', 'public');
            $mahasiswa->foto = $path;
            $mahasiswa->save();
        }

        return redirect()->back()->with('success', 'Foto profil berhasil diunggah.');
    }
}

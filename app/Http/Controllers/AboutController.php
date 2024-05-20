<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mahasiswa()
    {
        return view('mahasiswa.tentang');
    }
    public function profile()
    {
        $user = auth()->user();
        $mahasiswa = Mahasiswa::where('email', $user->email)->first();
        return view('mahasiswa.profile', compact('mahasiswa'));
    }
    public function dosen()
    {
        return view('dosbing.about');
    }
}

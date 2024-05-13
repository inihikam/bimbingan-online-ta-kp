<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mahasiswa()
    {
        return view('mahasiswa.tentang');
    }
    public function profile()
    {
        return view('mahasiswa.profile');
    }
    public function dosen()
    {
        return view('dosbing.about');
    }
}

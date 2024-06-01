<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DataMhsKoor extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('koor.data_mahasiswa.crud_mhs', compact('mahasiswa'));
    }
}

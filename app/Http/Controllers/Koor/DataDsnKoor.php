<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DataDsnKoor extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('koor.data_dospem.crud_dospem', compact('dosen'));
    }
}

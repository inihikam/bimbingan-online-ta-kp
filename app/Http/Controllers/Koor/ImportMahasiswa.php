<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Imports\MahasiswaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportMahasiswa extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new MahasiswaImport, $file);

        return back()->with('success', 'Import successful!');
    }
}

<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use App\Imports\DosenImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportDosen extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new DosenImport, $file);

        return back()->with('success', 'Import successful!');
    }
}

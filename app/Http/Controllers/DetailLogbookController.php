<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogbookBimbingan;

class DetailLogbookController extends Controller
{
    public function show($id_logbook)
    {
        // Menampilkan detail logbook dari tabel logbook berdasarkan id logbook
        $logbook = LogbookBimbingan::find($id_logbook);
        return response()->json($logbook);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $logbook = LogbookBimbingan::findOrFail($data['id_logbook']);
        $logbook->update($data);

        activity()
            ->inLog('logbook')
            ->causedBy(auth()->user())
            ->subject($logbook)
            ->log('mengubah logbook');

        return redirect()->route('mahasiswa-logbook');
    }
}

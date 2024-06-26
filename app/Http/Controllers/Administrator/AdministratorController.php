<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\DosenPeriodik;
use App\Models\MahasiswaPeriodik;
use App\Models\Periode;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard_admin');
    }

    public function periode_ajaran()
    {
        $periode = Periode::all();
        $selectedPeriod = Periode::where('status', 1)->first();
        $dsnPeriod = DosenPeriodik::where('id_periode', $selectedPeriod->id)
            ->with('dosen', 'status')
            ->get();

        $mhsPeriod = MahasiswaPeriodik::where('id_periode', $selectedPeriod->id)
            ->with('mahasiswa.statusMahasiswa')
            ->get();

        return view('administrator.periode.periode_ajaran', compact('periode', 'selectedPeriod', 'dsnPeriod', 'mhsPeriod'));
    }

    public function changePeriod(Request $request)
    {
        $periode = $request->input('period_id');
        Periode::query()->update(['status' => 0]);
        Periode::where('id', $periode)->update(['status' => 1]);

        activity()
            ->inLog('Periode')
            ->causedBy(auth()->user())
            ->performedOn($periode)
            ->withProperties(['periode' => $periode, 'user' => 'admin'])
            ->log('Mengubah periode ajaran');

//        return redirect()->back();
        return response()->json(['success' => true]);
    }

    public function log_dosbim()
    {
//        $role = Role::where('name', 'koordinator')->first();
//        $users = $role->users;
//        dd($users);
        return view('administrator.log_aplikasi.log_dosbim');
    }

    public function log_mahasiswa()
    {
        return view('administrator.log_aplikasi.log_mahasiswa');
    }

    public function about()
    {
        return view('administrator.about');
    }
}

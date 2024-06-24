<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard_admin');
    }

    public function periode_ajaran()
    {
        return view('administrator.periode.periode_ajaran');
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

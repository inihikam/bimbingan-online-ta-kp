<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Periode;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;

class LogController extends Controller
{
    public function logDosen()
    {
        $role = Role::where('name', 'dosen')->first();
        $dosenIds = $role->users->pluck('id');

        $activities = Activity::with('causer.dospem')->get();

        dd($activities);
    }
}

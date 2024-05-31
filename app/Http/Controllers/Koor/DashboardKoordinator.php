<?php

namespace App\Http\Controllers\Koor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKoordinator extends Controller
{
    public function index()
    {
        return view('koor.dashboard');
    }
}

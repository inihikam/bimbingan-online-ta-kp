<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;

class AdministratorController extends Controller {
    public function index() {
        return view('administrator.dashboard_admin');
    }

    public function data_koordinator()
    {
        return view('administrator.daftar_koordinator.data_koordinator');
    }

    public function detail_koordinator()
    {
        return view('administrator.daftar_koordinator.detail_koordinator');
    }

    public function about()
    {
        return view('administrator.about');
    }
}

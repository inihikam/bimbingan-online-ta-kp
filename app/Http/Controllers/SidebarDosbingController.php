<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarDosbingController extends Controller 
{
    public function index() {
        return view('dosbing.dashboard_dosbing');
    }

    public function daftar_logbook_mahasiswa() {
        return view('dosbing.daftar_logbook_mahasiswa.logbook_mahasiswa');
    }

    public function daftar_mahasiswa_bimbingan() {
        return view('dosbing.daftar_mahasiswa_bimbingan.mahasiswa_bimbingan');
    }

    public function daftar_mahasiswa_sidang() {
        return view('dosbing.daftar_mahasiswa_sidang.mahasiswa_sidang');
    }

    public function about() {
        return view('dosbing.about');
    }
}
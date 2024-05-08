@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan Sidang TA')
@section('content')
<div class="container">
    <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
        <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-jadwal" class="nav-link active rounded-pill">
                <i class="far fa-calendar-check"></i>
                Jadwal Sidang
            </a>
        </li>
        <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-pengajuan-sidang" class="nav-link rounded-pill">
                <i class="fas fa-edit"></i>
                Form Pengajuan
            </a>
        </li>
        <li class="nav-item">
            <a data-toggle="pill" href="#nav-tab-draft-sidang" class="nav-link rounded-pill">
                <i class="fas fa-book-open"></i>
                Draft Pengajuan
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="nav-tab-jadwal" class="tab-pane fade show active">
            @include('mahasiswa.pengajuan_sidang_ta.pilih_jadwal')
        </div>
        <div id="nav-tab-pengajuan-sidang" class="tab-pane fade">
            @include('mahasiswa.pengajuan_sidang_ta.form_sidang')
        </div>
        <div id="nav-tab-draft-sidang" class="tab-pane fade">
            @include('mahasiswa.pengajuan_sidang_ta.draft_sidang')
        </div>
    </div>
</div>
@endsection
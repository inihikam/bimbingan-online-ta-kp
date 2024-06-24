@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan TA')
@section('content')
    <div class="container">
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link rounded-pill">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Dosen Pembimbing
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link active rounded-pill">
                    <i class="fas fa-edit"></i>
                    Form Pengajuan
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link rounded-pill">
                    <i class="fas fa-book-open"></i>
                    Draft Pengajuan
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="nav-tab-pengajuan" class="tab-pane fade show active">
                <div class="container">
                    <h4 class="mb-4">Pengajuan TA</h4>
                    <blockquote class="blockquote-primary">
                        <p class="mb-3">Form dengan tanda asterik (<span class="required">*</span>) wajib diisi.</p>
                    </blockquote>
                    <form action="{{ route('mahasiswa-pengajuan-draft') }}" method="GET">
                        @csrf
                        <input type="hidden" name="id_dospem" value="{{ $data['id_dsn'] }}">
                        <!-- jalur TA -->
                        <div class="form-group row mb-3">
                            <label for="inputTopik" class="col-sm-2 col-form-label">Jalur <span
                                    class="required">*</span></label>
                            <div class="col-sm-10 mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jalur" id="reguler"
                                        value="REGULER" {{ $data['jalur'] == 'REGULER' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="reguler">Reguler</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jalur" id="publikasi"
                                        value="PUBLIKASI" {{ $data['jalur'] == 'PUBLIKASI' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="publikasi">Publikasi</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputTopik" class="col-sm-2 col-form-label">Topik<span
                                    class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="topik" name="topik" class="form-control" id="inputTopik"
                                    placeholder="Masukkan Topik TA" value="{{ $data['topik'] }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="judul" name="judul" class="form-control" id="inputJudul"
                                    placeholder="Masukkan Judul TA" value="{{ $data['judul'] }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputBidang" class="col-sm-2 col-form-label">Bidang Kajian <span
                                    class="required">*</span></label>
                            <div class="col-sm-3">
                                <select class="form-select" name="bidang_kajian" id="inputBidang"
                                    aria-label="Bidang Kajian">
                                    @if ($data['bidang_kajian'] == 'SC')
                                        <option disabled hidden>Pilih Bidang Kajian</option>
                                        <option selected value="SC">SC</option>
                                        <option value="RPLD">RPLD</option>
                                        <option value="SKKKD">SKKKD</option>
                                    @elseif ($data['bidang_kajian'] == 'RPLD')
                                        <option disabled hidden>Pilih Bidang Kajian</option>
                                        <option value="SC">SC</option>
                                        <option selected value="RPLD">RPLD</option>
                                        <option value="SKKKD">SKKKD</option>
                                    @elseif ($data['bidang_kajian'] == 'SKKKD')
                                        <option disabled hidden>Pilih Bidang Kajian</option>
                                        <option value="SC">SC</option>
                                        <option value="RPLD">RPLD</option>
                                        <option selected value="SKKKD">SKKKD</option>
                                    @else
                                        <option disabled selected>Pilih Bidang Kajian</option>
                                        <option value="SC">SC</option>
                                        <option value="RPLD">RPLD</option>
                                        <option value="SKKKD">SKKKD</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputKeyword" class="col-sm-2 col-form-label">Minat<span
                                    class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="keyword" name="minat" class="form-control" id="inputKeyword"
                                    placeholder="Masukkan minat anda untuk TA" value="{{ $data['minat'] }}">
                                <div id="keywordHelp" class="form-text">
                                    Pisahkan antar kata dengan tanda semikolon ( ; ).
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi<span
                                    class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="deskripsi" name="deskripsi" class="form-control" id="inputDeskripsi"
                                    placeholder="Masukkan Deskripsi" value="{{ $data['deskripsi'] }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3 justify-content-end">
                            <div class="col-sm-1 d-flex justify-content-end">
                                <a href="{{ route('mahasiswa-pengajuan') }}" class="btn btn-secondary me-2">Kembali</a>
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

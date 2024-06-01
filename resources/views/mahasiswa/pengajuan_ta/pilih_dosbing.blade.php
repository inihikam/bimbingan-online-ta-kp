@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan TA')
@section('content')
    <div class="container">
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link active rounded-pill">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Dosen Pembimbing
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link rounded-pill">
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
            <div id="nav-tab-dosbing" class="tab-pane fade show active">
                <div class="container">
                    <h4 class="mb-4">Pemilihan Dosen Pembimbing</h4>
                    <p class="mb-2">Berikut ini adalah daftar dosen pembimbing yang tersedia</p>
                    <blockquote class="blockquote-primary">
                        <p class="mb-3">Klik tombol panah <button type="button" class="btn btn-warning"><i
                                    class="fas fa-chevron-circle-right"></i></button> untuk memilih dosen pembimbing</p>
                    </blockquote>
                    <div class="input-group justify-content-end mb-3">
                        <input type="text" class="form-control" placeholder="Cari Dosen">
                        <div class="input-group-append"><button class="btn btn-primary"><i
                                    class="fas fa-search"></i></button></div>
                    </div>
                    <div class="table-container table-dosbing">
                        <table class="table table-bordered mb-1">
                            <thead class="table-header">
                                <th>No</th>
                                <th>NPP</th>
                                <th>Nama Dosen</th>
                                <th>Sisa Kuota</th>
                                <th>Aksi</th>
                            </thead>
                            @foreach ($dosens as $dos)
                                <tr>
                                    <td class="centered-column">{{ $loop->iteration }}</td>
                                    <td class="centered-column">{{ $dos->npp }}</td>
                                    <td>{{ $dos->nama }}</td>
                                    <td class="centered-column">{{ $dos->sisa_kuota }}</td>
                                    <form action="{{ route('mahasiswa-pengajuan-form') }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="id_dospem" value="{{ $dos->id_dospem }}">
                                        <input type="hidden" name="jalur">
                                        <input type="hidden" name="topik">
                                        <input type="hidden" name="judul">
                                        <input type="hidden" name="bidang_kajian">
                                        <input type="hidden" name="keyword">
                                        <input type="hidden" name="deskripsi">
                                        <input type="hidden" name="catatan">
                                        <td class="centered-column">
                                            <!-- button info dosbing -->
                                            <button type="button" value="{{ $dos->id_dospem }}" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#infoDosbingModal"><i
                                                    class="fas fa-info-circle"></i></button>
                                            <button type="submit" class="btn btn-warning" value="{{ $dos->id_dospem }}"><i
                                                    class="fas fa-chevron-circle-right"></i></button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $dosens->links() }}
                    {{-- <nav aria-label="pageNavigationDosbing">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
                    @if ($status->id_dospem != 0)
                        <h4 class="mb-4 mt-4">Dosen yang Dipilih</h4>
                        <div class="table-container">
                            <table class="table table-bordered">
                                <thead class="table-header">
                                    <th>NPP</th>
                                    <th>Nama Dosen</th>
                                    <th>Aksi</th>
                                </thead>
                                <tr id="dosen-dipilih">
                                    <td class="centered-column" id="npp">{{ $dospil->npp }}</td>
                                    <td id="nama">{{ $dospil->nama }}</td>
                                    <td class="centered-column"><button type="button" class="btn btn-danger"
                                            id="hapusDosenBtn"><i class="fas fa-trash" data-bs-toggle="modal"
                                                data-bs-target="#hapusDosbingModal"></i></button></td>
                                </tr>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Info Dosbing -->
    <div class="modal fade" id="infoDosbingModal" tabindex="-1" aria-labelledby="infoDosbingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoDosbingModalLabel">Info Dosen Pembimbing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <img src="https://via.placeholder.com/200x300" alt="scholar" class="image mb-3">
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label mb-3">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama" value="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nidn" class="col-sm-2 col-form-label mb-3">NIDN</label>
                            <div class="col-sm-10">
                                <input type="text" id="nidn" value="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="npp" class="col-sm-2 col-form-label mb-3">NPP</label>
                            <div class="col-sm-10">
                                <input type="text" id="npp" value="" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="scholar" class="col-sm-2 col-form-label mb-3">Scholar</label>
                            <div class="col-sm-10">
                                <a href="https://scholar.google.com/" class="btn btn-primary" role="button"
                                    id="scholar" aria-disabled="true" target="_blank">Go to Scholar</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

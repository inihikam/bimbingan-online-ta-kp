@extends('koor.layouts.main')
@section('title', 'Data Mahasiswa')
@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h1>Data Mahasiswa</h1>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogTambah"><i
                        class="fas fa-plus"></i>Tambah Data</a>
                <a target="_blank" class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#dialogImport"><i
                        class="fas fa-file-import"></i>&nbsp;Import</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data-koor" class="table table-striped table-bordered table-responsive table-hover"
                    style="width:100%; border-color:black">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>IPK</th>
                            <th>Transkrip Nilai</th>
                            <th>Telp Mhs</th>
                            <th>Email</th>
                            <th>Dosen Wali</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="centered-column">{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td class="centered-column">{{ $mhs->ipk }}</td>
                                <td class="centered-column"><a href="{{ $mhs->transkrip_nilai }}"
                                        target="_blank">Transkrip</a></td>
                                <td class="centered-column">{{ $mhs->telp_mhs }}</td>
                                <td class="centered-column">{{ $mhs->email }}</td>
                                <td>{{ $mhs->dosen_wali }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogDetail">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogEditMhs">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#dialogHapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Data Modal Tambah-->
    @include('koor.data_mahasiswa.tambah')

    <!--Data Modal Import-->
    @include('koor.data_mahasiswa.import')

    <!--Data Modal Detail-->
    @include('koor.data_mahasiswa.detail')

    <!--Data Modal Edit-->
    @include('koor.data_mahasiswa.edit')

    <!--Data Modal Hapus-->
    @include('koor.data_mahasiswa.hapus')

@endsection

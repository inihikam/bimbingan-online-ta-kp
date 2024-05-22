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
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogTambah"><i class="fas fa-plus"></i>Tambah Data</a>
            <a target="_blank" class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#dialogImport"><i class="fas fa-file-import"></i>&nbsp;Import</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md">
            <table id="data-koor" class="table table-striped table-bordered table-responsive table-hover" style="width:100%; border-color:black">
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
                    <tr>
                        <td>1</td>
                        <td class="centered-column">A11.2021.13374</td>
                        <td>Clara Edrea Evelyna</td>
                        <td class="centered-column">3.84</td>
                        <td class="centered-column">Dokumen</td>
                        <td class="centered-column">085290783525</td>
                        <td class="centered-column">111202113374@mhs.dinus.ac.id</td>
                        <td>L.Budi Handoko, M.Kom</td>
                        <td class="text-center align-middle">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#dialogDetail">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#dialogEditMhs">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#dialogHapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
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
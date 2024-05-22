@extends('koor.layouts.main')
@section('title', 'Data Dosen Pembimbing')
@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-md">
            <h1>Data Dosen Pembimbing</h1>
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
                        <th>NPP</th>
                        <th>Nama Dosen Pembimbing</th>
                        <th>Bidang Kajian</th>
                        <th>Kuota Mhs TA (Baru)</th>
                        <th>Jumlah Ajuan</th>
                        <th>Ajuan Diterima</th>
                        <th>Sisa Kuota</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="centered-column">0686.11.0000.000</td>
                        <td>John Doe, M.Kom</td>
                        <td class="centered-column">RPLD/SC</td>
                        <td class="centered-column">3</td>
                        <td class="centered-column">3</td>
                        <td class="centered-column">2</td>
                        <td class="centered-column">1</td>
                        <td class="centered-column">Penuh/Tersedia</td>
                        <td class="text-center align-middle">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#dialogDetail">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#dialogEditDosbing">
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
@include('koor.data_dospem.tambah')

<!--Data Modal Import-->
@include('koor.data_dospem.import')

<!--Data Modal Detail-->
@include('koor.data_dospem.detail')

<!--Data Modal Edit-->
@include('koor.data_dospem.edit')

<!--Data Modal Hapus-->
@include('koor.data_dospem.hapus')

@endsection
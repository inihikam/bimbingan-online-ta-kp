@extends('dosbing.layouts.main')
@section('title', 'Mahasiswa Bimbingan')
@section('content')
<div class="container">
<h4 class="mb-4">Daftar Mahasiswa Bimbingan</h4>
    <p class="mb-2">Berikut ini adalah daftar mahasiswa bimbingan</p>
    <blockquote class="blockquote-primary">
        <p class="mb-3">Klik tombol <button type="button" class="btn btn-warning" disabled><i class="fas fa-chevron-circle-right"></i></button> untuk melihat detail mahasiswa bimbingan</p>
    </blockquote>
    <div class="input-group justify-content-end mb-3">
        <input type="text" class="form-control" placeholder="Cari Mahasiswa">
        <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
    </div>
    <div class="table-container table-dosbing">
        <table class="table table-bordered mb-1">
            <thead class="table-header">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>IPK</th>
                <th>Info</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">A11.2021.13329</td>
                <td>MUHAMMAD RIZAL PRATAMA</td>
                <td class="centered-column">3.88</td>
                <td class="centered-column"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pilihDosbingModal"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
            <tr>
                <td class="centered-column">2</td>
                <td class="centered-column">A11.2021.13374</td>
                <td>CLARA EDREA EVELYNA SONY PUTRI</td>
                <td class="centered-column">3.94</td>
                <td class="centered-column"><button type="button" class="btn btn-warning"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
            <tr>
                <td class="centered-column">3</td>
                <td class="centered-column">A11.2021.13550</td>
                <td>MUHAMMAD MAULANA HIKAM</td>
                <td class="centered-column">3.90</td>
                <td class="centered-column"><button type="button" class="btn btn-warning"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
        </table>
    </div>
    <nav aria-label="pageNavigationDosbing">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-regular fa-chevron-left"></i></a>
            </li>
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-regular fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
@endsection
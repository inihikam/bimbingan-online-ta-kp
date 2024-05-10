@extends('dosbing.layouts.main')
@section('title', 'Mahasiswa Bimbingan')
@section('content')
<div class="container">
<h4 class="mb-4">Daftar Mahasiswa Bimbingan</h4>
    <p class="mb-2">Berikut ini adalah daftar mahasiswa bimbingan</p>
    <blockquote class="blockquote-primary">
        <p class="mb-3 px-3">Klik tombol <button type="button" class="btn btn-warning" disabled><i class="fas fa-info-circle"></i></i></button> untuk melihat detail mahasiswa bimbingan</p>
    </blockquote>
    <div class="input-group justify-content-end mb-3">
        <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
    </div>
    <div class="table-container table-dosbing">
        <table class="table table-bordered mb-1">
            <thead class="table-header">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>IPK</th>
                <th>Detail</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">A11.2021.13329</td>
                <td class="centered-column">MUHAMMAD RIZAL PRATAMA</td>
                <td class="centered-column">3.88</td>
                <td class="centered-column">
                    <a href="/detailMahasiswaBimbingan" class="btn btn-warning">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="centered-column">2</td>
                <td class="centered-column">A11.2021.13374</td>
                <td class="centered-column">CLARA EDREA EVELYNA SONY PUTRI</td>
                <td class="centered-column">3.94</td>
                <td class="centered-column">
                    <a href="/detailMahasiswaBimbingan" class="btn btn-warning">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="centered-column">3</td>
                <td class="centered-column">A11.2021.13550</td>
                <td class="centered-column">MUHAMMAD MAULANA HIKAM</td>
                <td class="centered-column">3.90</td>
                <td class="centered-column">
                    <a href="/detailMahasiswaBimbingan" class="btn btn-warning">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="centered-column">4</td>
                <td class="centered-column">A11.2021.13446</td>
                <td class="centered-column">MUH BAGUS SAPUTRO</td>
                <td class="centered-column">3.78</td>
                <td class="centered-column">
                    <a href="/detailMahasiswaBimbingan" class="btn btn-warning">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </td>
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
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">40</a></li>
            <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-regular fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</div>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Bimbingan Online</div>
        <div>
          <a href="#" class="text-secondary">Privacy Policy</a>
          &middot;
          <a href="#" class="text-secondary">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>
  </footer>
@endsection
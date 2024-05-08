@extends('dosbing.layouts.main')
@section('title', 'Logbook Mahasiswa Bimbingan')
@section('content')
<div class="container">
    <h4 class="mb-4">Daftar Logbook Mahasiswa Bimbingan</h4>

    <p class="mb-3 d-flex justify-content-between align-items-center">
        Berikut merupakan daftar logbook mahasiswa bimbingan
    </p>
    <div class="table-container table-logbook">
        <table class="table table-bordered">
            <thead class="table-header">
                <th class="align-middle">No.</th>
                <th class="align-middle">Tanggal</th>
                <th class="align-middle">Uraian Bimbingan</th>
                <th class="align-middle">Bab Terakhir</th>
                <th class="align-middle">Aksi</th>
                <th class="align-middle">Keterangan</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">30 April 2024</td>
                <td class="content-column">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</td>
                <td class="centered-column">Bab I</td>
                <td class="centered-column">
                    <button type="info" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dialogDetailLogbook"><i class="fa-regular fa-circle-check"></i></button>
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dialogEditLogbook"><i class="fa-regular fa-circle-xmark"></i></button>
                </td>
                <td class="centered-column">
                    Revisi
                </td>
            </tr>
            <tr>
                <td class="centered-column">2</td>
                <td class="centered-column">03 Mei 2024</td>
                <td class="content-column">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</td>
                <td class="centered-column">Bab I</td>
                <td class="centered-column">
                    <button type="info" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dialogDetailLogbook"><i class="fa-regular fa-circle-check"></i></button>
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dialogEditLogbook"><i class="fa-regular fa-circle-xmark"></i></button>
                </td>
                <td class="centered-column">
                    Success
                </td>
            </tr>
            <tr>
                <td class="centered-column">3</td>
                <td class="centered-column">07 Mei 2024</td>
                <td class="content-column">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</td>
                <td class="centered-column">Bab II</td>
                <td class="centered-column">
                    <button type="info" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dialogDetailLogbook"><i class="fa-regular fa-circle-check"></i></button>
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#dialogEditLogbook"><i class="fa-regular fa-circle-xmark"></i></button>
                </td>
                <td class="centered-column">
                    Revisi
                </td>
            </tr>
        </table>
    </div>
    <nav aria-label="pageNavigationLogbook">
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
</div>
@endsection
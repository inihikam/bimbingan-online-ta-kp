@extends('dosbing.layouts.main')
@section('title', 'Mahasiswa Sidang')
@section('content')
<div class="container">
<h4 class="mb-4">Daftar Mahasiswa Sidang</h4>
    <div class="modal fade" id="sidangModal" tabindex="-1" aria-labelledby="sidangModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sidangModalLabel">Pemberitahuan Sidang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selamat, Anda sudah memenuhi syarat untuk sidang Tugas Akhir. Silakan hubungi dosen pembimbing Anda untuk informasi lebih lanjut mengenai jadwal sidang.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <p class="mb-2">Berikut ini adalah daftar mahasiswa sidang</p>
=======
    <p class="mb-2">Berikut ini adalah daftar mahasiswa Sidang</p>
>>>>>>> 883ef70f0e1957bf4f14118cf76650fdb985fdd5
    <blockquote class="blockquote-primary">
        <p class="mb-3">Klik tombol <button type="button" class="btn btn-warning" disabled><i class="fas fa-chevron-circle-right"></i></button> untuk melihat detail mahasiswa Sidang</p>
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
                <th>Status Sidang</th>
                <th>Aksi</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">A11.2021.13446</td>
                <td>MUH BAGUS SAPUTRO</td>
                <td class="centered-column">3.78</td>
                <td class="centered-column"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pilihDosbingModal"><i class="fas fa-chevron-circle-right"></i></button></td>
                <td class="centered-column">Siap Sidang</td>
                <td class="centered-column">
                    <button type="button" class="btn btn-success" onclick="startSidang(1)"><i class="fas fa-play"></i> Mulai Sidang</button>
                </td>
            </tr>
            <tr>
                <td class="centered-column">2</td>
                <td class="centered-column">A11.2021.13329</td>
                <td>MUHAMMAD RIZAL PRATAMA</td>
                <td class="centered-column">3.88</td>
                <td class="centered-column"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pilihDosbingModal"><i class="fas fa-chevron-circle-right"></i></button></td>
                <td class="centered-column">Belum Siap Sidang (Logbook belum lengkap)</td>
                <td class="centered-column">
                    <!-- Tidak menampilkan tombol "Mulai Sidang" jika status sidang "Belum Siap Sidang" -->
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
            <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-regular fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</div>
<footer class="py-4 mt-auto">
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
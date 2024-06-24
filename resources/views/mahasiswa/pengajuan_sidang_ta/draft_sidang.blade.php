@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan Sidang TA')
@section('content')
<div class="container">
    <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
        <li class="nav-item">
            <a data-toggle="pill" class="nav-link rounded-pill">
                <i class="fas fa-edit"></i>
                Form Pengajuan
            </a>
        </li>
        <li class="nav-item">
            <a data-toggle="pill" class="nav-link active rounded-pill">
                <i class="fas fa-book-open"></i>
                Draft Pengajuan
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="nav-tab-draft-sidang" class="tab-pane fade show active">
            <div class="container">
                <h4 class="mb-4">Proposal Sidang Ke-1</h4>
                <blockquote class="blockquote-primary">
                    <p class="mb-3"><b>Status: Draft</b> - Untuk mengajukan sidang, klik tombol Ajukan di bawah</p>
                </blockquote>
                <!--
                <blockquote class="blockquote-primary">
                    <p class="mb-3"><b>Status: Disetujui</b> - Untuk tahap selanjutnya, silahkan hubungi koordinator TA untuk melihat jadwal sidang </p>
                </blockquote>
                <blockquote class="blockquote-pengajuan">
                    <p class="mb-3"><b>Status: Pengajuan</b> - Proposal telah diajukan pada tanggal [24 April 2024 10:47 WIB] </p>
                </blockquote>
                <blockquote class="blockquote-cancel">
                    <p class="mb-3"><b>Status: Ditolak</b> - Pengajuan sidang dengan tanggal [24 April 2024] dengan alasan ... </p>
                </blockquote>
                -->
                <table class="table table-bordered mb-5">
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td>Lorem Ipsum</td>
                        </tr>
                        <tr>
                            <td>Bidang Kajian</td>
                            <td>SC / RPLD</td>
                        </tr>
                        <tr>
                            <td>Dokumen Tugas Akhir</td>
                            <td><a href="https://github.com/eiffelputri" target="_blank">https://github.com/eiffelputri</a></td>
                        </tr>
                    </tbody>
                </table>

                <p class="mb-2"> Histori Penolakan Pengajuan Sidang</p>
                <div class="table-container table-tolak">
                    <table class="table table-bordered">
                        <thead class="table-header">
                            <th>Tanggal Pengajuan</th>
                            <th>Alasan Penolakan</th>
                        </thead>
                        <tr>
                            <td class="centered-column">24 April 2024 10:47 WIB</td>
                            <td class="alasan-column">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, quod debitis quis possimus impedit dolores iusto molestias accusantium</td>
                        </tr>
                    </table>
                </div>

                <div class="form-group row mb-3 justify-content-end"></div>
                <div class="d-flex justify-content-end">
                    <button type="delete" class="btn btn-danger me-2">Hapus</button>
                    <button type="edit" class="btn btn-warning me-2">Edit</button>
                    <button type="submit" class="btn btn-primary me-2">Ajukan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('administrator.layouts.main')
@section('title', 'Data Koordinator')
@section('content')

    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <h4 class="mb-4">Daftar Koordinator</h4>
            <p class="mb-2">Berikut ini adalah daftar koordinator bimbingan online</p>
            <blockquote class="blockquote-primary">
                <p class="mb-3 px-3">Tekan tombol <button type="button" class="btn btn-warning" disabled><i class="fas fa-info-circle"></i></button> untuk melihat detail data koordinator</p>
            </blockquote>
            <div class="d-flex justify-content-between mt-4 mb-3">
                <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i>Import Data</button>
                <div class="input-group" style="width: auto;">
                    <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="table-container table-admin">
                <table class="table table-bordered mb-1">
                    <thead class="table-header">
                    <tr>
                        <th>No</th>
                        <th>NPP</th>
                        <th>Nama Koordinator</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="centered-column">1</td>
                        <td class="centered-column">0686.11.2014.583</td>
                        <td>DANANG WAHYU UTOMO, M.Kom</td>
                        <td class="centered-column">danang.wu@dsn.dinus.ac.id</td>
                        <td class="centered-column">085647846893</td>
                        <td class="centered-column">
                            <a href="/detailKoordinator" class="btn btn-warning">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                        <td class="centered-column">
                            <a href="javascript:void(0)" class="btn btn-danger delete-button">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="centered-column">2</td>
                        <td class="centered-column">0686.11.2014.585</td>
                        <td>EGIA ROSI SUBHIYAKTO, M.Kom</td>
                        <td class="centered-column">egia@dsn.dinus.ac.id</td>
                        <td class="centered-column">081746837645</td>
                        <td class="centered-column">
                            <a href="/detailKoordinator" class="btn btn-warning">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                        <td class="centered-column">
                            <a href="javascript:void(0)" class="btn btn-danger delete-button">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="centered-column">3</td>
                        <td class="centered-column">0686.11.2012.440</td>
                        <td>FAHRI FIRDAUSILLAH, S.Kom, M.CS</td>
                        <td class="centered-column">fahri@dsn.dinus.ac.id</td>
                        <td class="centered-column">081567487583</td>
                        <td class="centered-column">
                            <a href="/detailKoordinator" class="btn btn-warning">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                        <td class="centered-column">
                            <a href="javascript:void(0)" class="btn btn-danger delete-button">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="centered-column">4</td>
                        <td class="centered-column">0686.11.2012.459</td>
                        <td>JUNTA ZENIARJA, M.Kom</td>
                        <td class="centered-column">junta@dsn.dinus.ac.id</td>
                        <td class="centered-column">081364758937</td>
                        <td class="centered-column">
                            <a href="/detailKoordinator" class="btn btn-warning">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                        <td class="centered-column">
                            <a href="javascript:void(0)" class="btn btn-danger delete-button">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    Swal.fire({
                        title: 'Apakah data ingin dihapus?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Proses penghapusan data di sini
                            Swal.fire(
                                'Deleted!',
                                'Data berhasil dihapus.',
                                'success'
                            );
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            // Batalkan penghapusan
                            Swal.fire(
                                'Canceled!',
                                'Data gagal dihapus',
                                'error'
                            );
                        }
                    });
                });
            });
        });
    </script>
@endsection

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
                            <td class="centered-column"><a href="{{ $mhs->transkrip }}"
                                                           target="_blank">Transkrip</a></td>
                            <td class="centered-column">{{ $mhs->telp }}</td>
                            <td class="centered-column">{{ $mhs->email }}</td>
                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogDetailMhsKoor"
                                            data-id="{{ $mhs->statusMahasiswa->id_mhs }}">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogEditMhsKoor"
                                            data-id="{{ $mhs->statusMahasiswa->id_mhs }}">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#dialogHapusMhs"
                                            data-id="{{ $mhs->statusMahasiswa->id_mhs }}">
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var detailModal = document.querySelector('#dialogDetailMhsKoor');

            detailModal.addEventListener('show.bs.modal', function (event) {
                // Tombol yang memicu modal
                var button = event.relatedTarget;
                // Ambil id logbook dari atribut data-id
                var mhsId = button.getAttribute('data-id');
                console.log(mhsId);

                // Kirim permintaan ke backend untuk mengambil data logbook berdasarkan id
                fetch('/dataMhs/' + mhsId)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                        console.log(data.mahasiswa.status_mahasiswa.id_dsn)
                        detailModal.querySelector('#dialogName').textContent += data.mahasiswa.nama;
                        detailModal.querySelector('#npp').textContent = data.mahasiswa.status_mahasiswa
                            .dospem.npp;
                        detailModal.querySelector('#nama').textContent = data.mahasiswa.status_mahasiswa
                            .dospem.nama;
                        detailModal.querySelector('#email').textContent = data.mahasiswa
                            .status_mahasiswa.dospem.email;
                        detailModal.querySelector('#telp').textContent = data.mahasiswa.status_mahasiswa
                            .dospem.telp;
                    })
                    .catch(error => console.error('Error:', error));
            });

            // Jika detail modal ditutup maka hapus nilai didalamnya
            detailModal.addEventListener('hidden.bs.modal', function (event) {
                detailModal.querySelector('#dialogName').textContent = 'Daftar Dosbing dari ';
                detailModal.querySelector('#npp').textContent = '';
                detailModal.querySelector('#nama').textContent = '';
                detailModal.querySelector('#email').textContent = '';
                detailModal.querySelector('#telp').textContent = '';
            });

            var editModal = document.querySelector('#dialogEditMhsKoor');

            editModal.addEventListener('show.bs.modal', function (event) {

                var button = event.relatedTarget;

                var mhsId = button.getAttribute('data-id');
                console.log(mhsId);

                fetch('/dataMhs/' + mhsId)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        editModal.querySelector('#oldNim').value = data.mahasiswa.nim;
                        editModal.querySelector('#inputNIM').value = data.mahasiswa.nim;
                        editModal.querySelector('#inputNama').value = data.mahasiswa.nama;
                        editModal.querySelector('#inputIPK').value = data.mahasiswa.ipk;
                        editModal.querySelector('#inputTranskrip').value = data.mahasiswa
                            .transkrip_nilai;
                        editModal.querySelector('#inputTelp').value = data.mahasiswa.telp;
                        editModal.querySelector('#inputEmail').value = data.mahasiswa.email;
                    })
                    .catch(error => console.error('Error:', error));
            });

            var delModal = document.querySelector('#dialogHapusMhs');

            delModal.addEventListener('show.bs.modal', function (event) {

                var button = event.relatedTarget;

                var mhsId = button.getAttribute('data-id');
                console.log(mhsId);

                fetch('/dataMhs/' + mhsId)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        delModal.querySelector('#nim').value = data.mahasiswa.nim;
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#data-koor').DataTable();
        });
    </script>
@endsection

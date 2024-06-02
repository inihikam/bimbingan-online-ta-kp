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
                        @foreach ($dosen as $ds)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="centered-column">{{ $ds->npp }}</td>
                                <td>{{ $ds->nama }}</td>
                                <td class="centered-column">{{ $ds->bidang_kajian }}</td>
                                <td class="centered-column">{{ $ds->kuota_mhs_ta }}</td>
                                <td class="centered-column">{{ $ds->jml_ajuan }}</td>
                                <td class="centered-column">{{ $ds->acc_ajuan }}</td>
                                <td class="centered-column">{{ $ds->sisa_kuota }}</td>
                                <td class="centered-column">{{ $ds->status_dospem }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogDetailDsn" data-id="{{ $ds->id_dospem }}">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#dialogEditDosbingKoor" data-id="{{ $ds->id_dospem }}">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#dialogHapusKoor" data-id="{{ $ds->id_dospem }}">
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#dialogDetailDsn').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var dosenId = button.data('id');
                console.log(dosenId)
                var modal = $(this);
                console.log(modal)

                $.ajax({
                    url: '/dataDsn/' + dosenId,
                    method: 'GET',
                    success: function(data) {
                        console.log(data)
                        modal.find('.modal-title').text('Daftar Bimbingan dari ' + data.dsn[0]
                            .nama);
                        $('#mahasiswaBimbinganList').html(
                            ''); // Kosongkan tbody sebelum mengisinya
                        if (data.dsn[0].mahasiswa.length > 0) {
                            data.dsn[0].mahasiswa.forEach(function(mahasiswa, index) {
                                console.log(mahasiswa.mahasiswa.nama)
                                console.log(mahasiswa.nim)
                                console.log('Appending Mahasiswa:', mahasiswa);
                                $('#mahasiswaBimbinganList').append(`
                                <tr>
                                    <td>${index + 1}</td>
                                    <td class="centered-column">${mahasiswa.nim}</td>
                                    <td class="content-column">${mahasiswa.mahasiswa.nama}</td>
                                    <td class="centered-column">${mahasiswa.ta_1}</td>
                                    <td class="centered-column">${mahasiswa.ta_2}</td>
                                    <td class="centered-column">${mahasiswa.bab_terakhir ? mahasiswa.bab_terakhir : ''}</td>
                                    <td class="centered-column">${mahasiswa.jml_bimbingan ? mahasiswa.jml_bimbingan : ''}</td>
                                    <td class="centered-column">${mahasiswa.status ? mahasiswa.status : ''}</td>
                                    <td class="centered-column">${mahasiswa.sidang_ta_1}</td>
                                    <td class="centered-column">${mahasiswa.sidang_ta_2}</td>
                                </tr>
                            `);
                            });
                        } else {
                            $('#mahasiswaBimbinganList').append(
                                '<tr><td colspan="10" class="text-center">Tidak ada data mahasiswa bimbingan</td></tr>'
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        console.log('XHR:', xhr);
                        console.log('Status:', status);
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editModal = document.querySelector('#dialogEditDosbingKoor');

            editModal.addEventListener('show.bs.modal', function(event) {

                var button = event.relatedTarget;

                var dsnId = button.getAttribute('data-id');
                console.log(dsnId);

                fetch('/dataDsn/' + dsnId)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        console.log(data.dsn[0].nama);
                        console.log(data.dsn[0].id_dospem);
                        editModal.querySelector('#inputDospem').value = data.dsn[0].id_dospem;
                        editModal.querySelector('#inputNPP').value = data.dsn[0].npp;
                        editModal.querySelector('#inputNama').value = data.dsn[0].nama;
                        editModal.querySelector('#inputBidangKajian').value = data.dsn[0].bidang_kajian;
                        editModal.querySelector('#inputKuota').value = data.dsn[0].kuota_mhs_ta;
                        editModal.querySelector('#inputEmail').value = data.dsn[0].email;
                    })
                    .catch(error => console.error('Error:', error));
            });

            var delModal = document.querySelector('#dialogHapusKoor');

            delModal.addEventListener('show.bs.modal', function(event) {

                var button = event.relatedTarget;

                var dsnId = button.getAttribute('data-id');
                console.log(dsnId);

                fetch('/dataDsn/' + dsnId)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        delModal.querySelector('#inputId').value = data.dsn[0].id_dospem;
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection

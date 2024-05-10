@extends('mahasiswa.layouts.main')
@section('title', 'Logbook Bimbingan TA')
@section('content')
    <div class="container">
        <h4 class="mb-4">Bimbingan TA</h4>

        <p class="mb-2 d-flex justify-content-between align-items-center">
            Berikut merupakan daftar progres bimbingan yang sudah dilakukan oleh mahasiswa dengan dosen pembimbing
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogTambahLogbook"> <i
                    class="fas fa-plus"></i>Tambah</button>
        </p>
        <div class="table-container table-logbook">
            <table class="table table-bordered">
                <thead class="table-header">
                    <th class="align-middle">No.</th>
                    <th class="align-middle">Tanggal</th>
                    <th class="align-middle">Uraian Bimbingan</th>
                    <th class="align-middle">Bab Terakhir Bimbingan</th>
                    <th class="align-middle">Status</th>
                    <th class="align-middle">Aksi</th>
                </thead>
                @php
                    $selected = 0;
                @endphp
                @foreach ($logbook as $lb)
                    <tr>
                        <td class="centered-column">{{ $loop->iteration }}</td>
                        <td class="centered-column">{{ $lb->tanggal_bimbingan }}</td>
                        <td class="content-column">{{ $lb->uraian_bimbingan }}</td>
                        <td class="centered-column">{{ $lb->bab_terakhir_bimbingan }}</td>
                        <td class="centered-column">
                            @if ($lb->status_logbook == 'ACC')
                                <button type="status" class="btn btn-success rounded-5">ACC
                                    <i class="fas fa-check icon-dark-acc"></i>
                                </button>
                            @elseif ($lb->status_logbook == 'REVISI')
                                <button type="status" class="btn btn-danger rounded-5">Belum ACC
                                    <i class="fas fa-times icon-dark-no"></i>
                                </button>
                            @endif
                        </td>
                        <td class="centered-column">
                            <button type="info" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#dialogDetailLogbook" data-id="{{ $lb->id_logbook }}"><i
                                    class="fas fa-info-circle"></i></button>
                            <button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#dialogEditLogbook" data-id="{{ $lb->id_logbook }}"><i
                                    class="far fa-edit"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <nav aria-label="pageNavigationLogbook">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <!--Dialog Tambah Logbook-->
    @include('mahasiswa.logbook_ta.tambah_logbook')

    <!--Dialog Edit Logbook-->
    @include('mahasiswa.logbook_ta.edit_logbook')

    <!--Dialog Info Logbook-->
    @include('mahasiswa.logbook_ta.detail_logbook')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var detailModal = document.querySelector('#dialogDetailLogbook');

            detailModal.addEventListener('show.bs.modal', function(event) {
                // Tombol yang memicu modal
                var button = event.relatedTarget;
                // Ambil id logbook dari atribut data-id
                var logbookId = button.getAttribute('data-id');
                console.log(logbookId);

                // Kirim permintaan ke backend untuk mengambil data logbook berdasarkan id
                fetch('/logbook/' + logbookId)
                    .then(response => response.json())
                    .then(data => {
                        // Update konten modal dengan data yang diterima dari backend
                        detailModal.querySelector('.date').textContent = data.tanggal_bimbingan;
                        detailModal.querySelector('.uraian').textContent = data.uraian_bimbingan;
                        detailModal.querySelector('.bab').textContent = data.bab_terakhir_bimbingan;
                        detailModal.querySelector('.status').textContent = data.status_logbook;
                        detailModal.querySelector('.dokumen').textContent = data.dokumen;

                        var linkDokumen = detailModal.querySelector('#linkDokumen');
                        linkDokumen.setAttribute('href', data.dokumen)
                    })
                    .catch(error => console.error('Error:', error));
            });

            var editModal = document.querySelector('#dialogEditLogbook');

            editModal.addEventListener('show.bs.modal', function(event) {

                var button = event.relatedTarget;

                var logbookId = button.getAttribute('data-id');
                console.log(logbookId);

                editModal.querySelector('#logbook_id').value = logbookId;

                fetch('/logbook/' + logbookId)
                    .then(response => response.json())
                    .then(data => {
                        editModal.querySelector('#inputCatatan').value = data.uraian_bimbingan;
                        editModal.querySelector('#inputBidang').value = data.bab_terakhir_bimbingan;
                        editModal.querySelector('#inputDok').value = data.dokumen;
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>

@endsection

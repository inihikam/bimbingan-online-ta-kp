@extends('mahasiswa.layouts.main')
@section('title', 'Logbook Bimbingan TA')
@section('content')
    <div class="container">
        <h4 class="mb-4">Bimbingan TA</h4>

        @php
            if ($status->id_dsn == 0) {
                echo '<div class="alert alert-warning" role="alert">
                    Anda belum memiliki dosen pembimbing. Silahkan melakukan pengajuan TA terlebih dahulu.
                </div>';
            } else {
                echo '<p class="mb-2 d-flex justify-content-between align-items-center">
            Berikut merupakan daftar progres bimbingan yang sudah dilakukan oleh mahasiswa dengan dosen pembimbing
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogTambahLogbook"> <i
                    class="fas fa-plus"></i>Tambah</button>
        </p>';
            }
        @endphp
        <div class="table-container table-logbook">
            <table id="table-log" class="table table-bordered">
                <thead class="table-header">
                    <th class="align-middle">No.</th>
                    <th class="align-middle">Tanggal</th>
                    <th class="align-middle">Uraian Bimbingan</th>
                    <th class="align-middle">Bab Terakhir Bimbingan</th>
                    <th class="align-middle">Status</th>
                    <th class="align-middle">Aksi</th>
                </thead>
                @foreach ($logbook as $lb)
                    <tr>
                        <td class="centered-column">{{ $loop->iteration }}</td>
                        <td class="centered-column">{{ $lb->tanggal }}</td>
                        <td class="content-column">{{ $lb->uraian }}</td>
                        <td class="centered-column">{{ $lb->bab }}</td>
                        <td class="centered-column">
                            @if ($lb->status == 'ACC')
                                <button type="status" class="btn btn-success rounded-5">ACC
                                </button>
                            @elseif ($lb->status == 'REVISI')
                                <button type="status" class="btn btn-danger rounded-5">REVISI
                                </button>
                            @else
                                <button type="status" class="btn btn-warning rounded-5">PENDING
                                </button>
                            @endif
                        </td>
                        <td class="centered-column">
                            <button type="info" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#dialogDetailLogbook" data-id="{{ $lb->id }}"><i
                                    class="fas fa-info-circle"></i></button>
                            @if ($lb->status == 'PENDING')
                                <button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#dialogEditLogbook" data-id="{{ $lb->id }}"><i
                                        class="far fa-edit"></i></button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- <nav aria-label="pageNavigationLogbook">
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
        </nav> --}}
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
                        detailModal.querySelector('.date').textContent = data.tanggal;
                        detailModal.querySelector('.uraian').textContent = data.uraian;
                        detailModal.querySelector('.bab').textContent = data.bab;
                        detailModal.querySelector('.status').textContent = data.status;
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
                        editModal.querySelector('#inputTanggal').value = data.tanggal;
                        editModal.querySelector('#inputCatatan').value = data.uraian;
                        editModal.querySelector('#inputBidang').value = data.bab;
                        editModal.querySelector('#inputDok').value = data.dokumen;
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table-log').DataTable();
    });
</script>

@extends('dosbing.layouts.main')
@section('title', 'Logbook Mahasiswa Bimbingan')
@section('content')

    <!--Dialog Info Logbook-->
    @include('dosbing.daftar_logbook_mahasiswa.detail_logbook')

    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <h3 class="mb-3"><b>Daftar Logbook Mahasiswa Bimbingan</b></h3>
            <p class="mb-5 d-flex justify-content-between align-items-center">
                Berikut merupakan daftar logbook mahasiswa bimbingan
            </p>
            <div class="table-container table-logbook">
                <table class="table table-bordered">
                    <thead class="table-header">
                    <th class="align-middle">No</th>
                    <th class="align-middle">NIM</th>
                    <th class="align-middle">Nama Mahasiswa</th>
                    <th class="align-middle">Jumlah Bimbingan</th>
                    <th class="align-middle">Bab Terakhir</th>
                    <th class="align-middle">Logbook</th>
                    </thead>
{{--                    @foreach ($logbook as $lbmhs)--}}
{{--                        @php--}}
{{--                            $statusMhs = $status->where('id_mhs', $lbmhs->id_mhs)->first();--}}
{{--                            $detailMhs = $mahasiswa->where('nim', $statusMhs->nim)->first();--}}
{{--                        @endphp--}}
{{--                        <tr>--}}
{{--                            <td class="centered-column">{{ $loop->iteration }}</td>--}}
{{--                            <td class="centered-column">{{ $lbmhs->tanggal_bimbingan }}</td>--}}
{{--                            <td>{{ $detailMhs->nama }}</td>--}}
{{--                            <td class="content-column">{{ $lbmhs->uraian_bimbingan }}</td>--}}
{{--                            <td class="centered-column">Bab {{ $lbmhs->bab_terakhir_bimbingan }}</td>--}}
{{--                            <td class="centered-column"><a href="{{ $lbmhs->dokumen }}" target="_blank">Dokumen</a></td>--}}
{{--                            @if ($lbmhs->status_logbook == 'PENDING')--}}
{{--                                <td class="centered-column">--}}
{{--                                    <form action="{{ route('update-dosbing-logbook') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <input type="hidden" name="id_logbook" value="{{ $lbmhs->id_logbook }}">--}}
{{--                                        <button type="submit" name="status" class="btn btn-success" value="ACC"><i--}}
{{--                                                class="fa-regular fa-circle-check"></i></button>--}}
{{--                                        <button type="submit" name="status" class="btn btn-danger" value="REVISI"><i--}}
{{--                                                class="fa-regular fa-circle-xmark"></i></button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            @elseif ($lbmhs->status_logbook == 'ACC')--}}
{{--                                <td class="centered-column">--}}
{{--                                    <button type="status" class="btn btn-success rounded-5">{{ $lbmhs->status_logbook }}--}}
{{--                                        <i class="fas fa-check icon-dark-acc"></i>--}}
{{--                                    </button>--}}
{{--                                </td>--}}
{{--                            @elseif ($lbmhs->status_logbook == 'REVISI')--}}
{{--                                <td class="centered-column">--}}
{{--                                    <button type="status" class="btn btn-danger rounded-5">{{ $lbmhs->status_logbook }}--}}
{{--                                        <i class="fas fa-times icon-dark-no"></i>--}}
{{--                                    </button>--}}
{{--                                </td>--}}
{{--                            @endif--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    @foreach($status as $st)
                        <tr class="centered-column">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $st->mahasiswa->nim }}</td>
                            <td>{{ $st->mahasiswa->nama }}</td>
                            <td>1</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#dialogDetailLogbook" data-id="{{ $st->id }}">
                                    Logbook
                                </button>
                            </td>
                        </tr>
                    @endforeach
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
        $(document).ready(function() {
            $('#dialogDetailLogbook').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var mhsId = button.data('id');
                console.log(mhsId)
                var modal = $(this);
                console.log(modal)

                $.ajax({
                    url: '/logbookBimbinganList/' + mhsId,
                    method: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#mahasiswaLogbookList').empty(); // Kosongkan tabel sebelum mengisi

                        if (data.length > 0) {
                            data.forEach(function(logbook, index) {
                                $('#mahasiswaLogbookList').append(`
                                    <tr>
                                        <td>${index + 1}</td>
                                        <td class="centered-column">${logbook.tanggal}</td>
                                        <td class="centered-column">${logbook.bab}</td>
                                        <td class="content-column">${logbook.uraian}</td>
                                        <td class="content-column"><a href="${logbook.dokumen}" target="_blank">${logbook.dokumen}</a></td>
                                        <td class="col-2 centered-column">
                                            <button type="submit" name="status" class="btn btn-success" value="ACC"><i class="fa-regular fa-circle-check"></i></button>
                                            <button type="submit" name="status" class="btn btn-danger delete-button" value="REVISI"><i class="fa-regular fa-circle-xmark"></i></button>
                                        </td>
                                    </tr>
                                `);
                            });
                        } else {
                            $('#mahasiswaLogbookList').append(
                                '<tr><td colspan="10" class="text-center">Tidak ada data logbook bimbingan</td></tr>'
                            );
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        console.log('XHR:', xhr);
                        console.log('Status:', status);
                    }
                });
                // $.ajax({
                //     url: '/logbookBimbinganList/' + mhsId,
                //     method: 'GET',
                //     success: function(data) {
                //         console.log(data)
                //         $('#mahasiswaLogbookList').html(
                //             ''); // Kosongkan tbody sebelum mengisinya
                //         if (Object.keys(data).length > 0) {
                //             const logbook = data;
                //             console.log(logbook)
                //             const index = 0;
                //
                //             $('#mahasiswaLogbookList').append(`
                //                 <tr>
                //                     <td>${index + 1}</td>
                //                     <td class="centered-column">${logbook.id_mhs}</td>
                //                     <td class="content-column">Data Mahasiswa Tidak Ada</td>
                //                     <td class="centered-column"></td>
                //                     <td class="centered-column"></td>
                //                     <td class="centered-column">${logbook.bab}</td>
                //                     <td class="centered-column">1</td> // Karena hanya ada satu entri
                //                     <td class="centered-column">${logbook.status}</td>
                //                     <td class="centered-column"></td>
                //                     <td class="centered-column"></td>
                //                 </tr>
                //             `);
                //         } else {
                //             $('#mahasiswaLogbookList').append(
                //                 '<tr><td colspan="10" class="text-center">Tidak ada data logbook bimbingan</td></tr>'
                //             );
                //         }
                //     },
                //     error: function(xhr, status, error) {
                //         console.error('AJAX Error:', error);
                //         console.log('XHR:', xhr);
                //         console.log('Status:', status);
                //     }
                // });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    Swal.fire({
                        title: 'Apakah Anda Yakin?',
                        text: "Logbook yang ditolak tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, tolak!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Proses penghapusan data di sini
                            Swal.fire(
                                'Success!',
                                'Logbook berhasil ditolak',
                                'success'
                            );
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            // Batalkan penghapusan
                            Swal.fire(
                                'Canceled!',
                                'Logbook gagal ditolak',
                                'error'
                            );
                        }
                    });
                });
            });
        });
    </script>
@endsection

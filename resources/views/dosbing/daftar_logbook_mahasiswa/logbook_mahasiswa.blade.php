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
                <table class="table table-bordered" id="table-log">
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
                    <tr class="centered-column">
                        <td>1</td>
                        <td>A11.2021.13550</td>
                        <td>Muhammad Maulana Hikam</td>
                        <td>3</td>
                        <td>2</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#dialogDetailLogbook">Dokumen</a>
                        </td>
                    </tr>
                </table>
            </div>

            {{ $logbook->links() }}
            {{-- <nav aria-label="pageNavigationLogbook">
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
        </nav> --}}
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Inisialisasi DataTables
        $(document).ready(function () {
            $('#table-log').DataTable();
        });
    </script>
@endsection

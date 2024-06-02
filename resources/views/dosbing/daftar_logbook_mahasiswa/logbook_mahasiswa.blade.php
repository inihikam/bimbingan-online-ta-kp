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
                    <th class="align-middle">Nama Mahasiswa</th>
                    <th class="align-middle">Uraian Bimbingan</th>
                    <th class="align-middle">Bab Terakhir</th>
                    <th class="align-middle">Dokumen</th>
                    <th class="align-middle">Status</th>
                </thead>
                @foreach ($logbook as $lbmhs)
                    @php
                        $statusMhs = $status->where('id_mhs', $lbmhs->id_mhs)->first();
                        $detailMhs = $mahasiswa->where('nim', $statusMhs->nim)->first();
                    @endphp
                    <tr>
                        <td class="centered-column">{{ $loop->iteration }}</td>
                        <td class="centered-column">{{ $lbmhs->tanggal_bimbingan }}</td>
                        <td>{{ $detailMhs->nama }}</td>
                        <td class="content-column">{{ $lbmhs->uraian_bimbingan }}</td>
                        <td class="centered-column">Bab {{ $lbmhs->bab_terakhir_bimbingan }}</td>
                        <td class="centered-column"><a href="{{ $lbmhs->dokumen }}" target="_blank">Dokumen</a></td>
                        @if ($lbmhs->status_logbook == 'PENDING')
                            <td class="centered-column">
                                <form action="{{ route('update-dosbing-logbook') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_logbook" value="{{ $lbmhs->id_logbook }}">
                                    <button type="submit" name="status" class="btn btn-success" value="ACC"><i
                                            class="fa-regular fa-circle-check"></i></button>
                                    <button type="submit" name="status" class="btn btn-danger" value="REVISI"><i
                                            class="fa-regular fa-circle-xmark"></i></button>
                                </form>
                            </td>
                        @elseif ($lbmhs->status_logbook == 'ACC')
                            <td class="centered-column">
                                <button type="status" class="btn btn-success rounded-5">{{ $lbmhs->status_logbook }}
                                </button>
                            </td>
                        @elseif ($lbmhs->status_logbook == 'REVISI')
                            <td class="centered-column">
                                <button type="status" class="btn btn-danger rounded-5">{{ $lbmhs->status_logbook }}
                                </button>
                            </td>
                        @endif
                    </tr>
                @endforeach
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
    </footer>
@endsection

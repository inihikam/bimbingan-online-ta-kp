@extends('mahasiswa.layouts.main')
@section('title', 'Dashboard Mahasiswa')
@section('content')
    <div class="container-dashboard">
        <h1>Welcome,</h1>
        <div class="type">
            {{-- mengambil nama dari controller --}}
            <h1>{{ $mahasiswa->nama }}</h1>
        </div>
        <p>Siap untuk lulus cepat hari ini?</p>
    </div>
    <main class="container-border">
        <div class="row">
            <div class="col-md-8 py-5">
                <h1><i class="far fa-calendar-check"></i> Aktivitas Terbaru</h1>
                <div class="table-container table-aktivitas">
                    <table class="table table-bordered">
                        <thead class="table-header">
                            <th class="align-middle">No.</th>
                            <th class="align-middle">Aktivitas</th>
                            <th class="align-middle">Tanggal Pengajuan</th>
                            <th class="align-middle">Status</th>
                        </thead>
                        @foreach ($logbook as $lg)
                            <tr>
                                <td class="centered-column">{{ $loop->iteration }}</td>
                                <td class="content-column">{{ $lg->uraian_bimbingan }}</td>
                                <td class="centered-column">{{ $lg->tanggal_bimbingan }}</td>
                                <td class="centered-column">
                                    @if ($lg->status_logbook == 'ACC')
                                        <button type="status" class="btn btn-success rounded-5">ACC
                                            <i class="fas fa-check icon-dark-acc"></i>
                                        </button>
                                    @elseif ($lg->status_logbook == 'REVISI')
                                        <button type="status" class="btn btn-danger rounded-5">Belum ACC
                                            <i class="fas fa-times icon-dark-no"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="col-md-4 py-5">
                <h1><i class="fas fa-bell"></i> Notifikasi</h1>
                <p>Dosen Pembimbing telah menerima topikmu! Silahkan ke halaman Logbook untuk mengisi catatan bimbingan.</p>
                <button type="submit" class="btn btn-primary"><i class="fas fa-chevron-right"></i>Menuju ke
                    Halaman</button>
            </div>
        </div>
    </main>

@endsection

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
            @if ($status->id_dsn == 0)
                <div class="alert alert-warning" role="alert">
                    Anda belum memiliki dosen pembimbing. Silahkan melakukan pengajuan TA terlebih dahulu.
                </div>
                <a href="{{ route('mahasiswa-pengajuan') }}" class="btn btn-primary"><i
                        class="fas fa-chevron-right"></i>Pengajuan Dosen Pembimbing</a>
            @else
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
                                    <td class="content-column">{{ $lg->uraian }}</td>
                                    <td class="centered-column">{{ $lg->tanggal }}</td>
                                    <td class="centered-column">
                                        @if ($lg->status == 'ACC')
                                            <button type="status" class="btn btn-success rounded-5">ACC
                                                <i class="fas fa-check icon-dark-acc"></i>
                                            </button>
                                        @elseif ($lg->status == 'REVISI')
                                            <button type="status" class="btn btn-danger rounded-5">Belum ACC
                                                <i class="fas fa-times icon-dark-no"></i>
                                        @else
                                            </button><button type="status" class="btn btn-warning rounded-5">PENDING
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
                    <p>Dosen Pembimbing telah menerima topikmu! Silahkan ke halaman Logbook untuk mengisi catatan bimbingan.
                    </p>
                    <a href="{{ route('mahasiswa-logbook') }}" class="btn btn-primary"><i
                            class="fas fa-chevron-right"></i>Menuju ke
                        Halaman</a>
                </div>
            @endif
        </div>
    </main>

@endsection

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
        <div class="container">
            <h4 class="mb-4 text-center">Lengkapi Data Diri</h4>
            <form>
                <div class="form-group row mb-3">
                    <label for="inputIPK" class="col-sm-2 col-form-label">IPK <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputIPK" placeholder="Masukkan IPK">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputTranskrip" class="col-sm-2 col-form-label">Transkrip Nilai <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTranskrip" placeholder="Masukkan Link Transkrip Nilai">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputNoTelp" class="col-sm-2 col-form-label">No Telepon <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNoTelp" placeholder="Masukkan No Telepon">
                    </div>
                </div>
                <div class="form-group row mb-3 justify-content-end">
                    <div class="col-sm-1 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            @if ($status->id_dospem == 0)
            <div class="alert alert-warning" role="alert">
                Anda belum memiliki dosen pembimbing. Silahkan melakukan pengajuan TA terlebih dahulu.
            </div>
            <a href="{{ route('mahasiswa-pengajuan') }}" class="btn btn-primary"><i class="fas fa-chevron-right"></i>Pengajuan Dosen Pembimbing</a>
            @else
            <div class="col-md-8 py-5">
                <h1><i class="far fa-calendar-check"></i> Aktivitas Terbaru</h1>
                <div class="table-container table-aktivitas">
                    <table id="table-aktivitas" class="table table-bordered">
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
                <p>Dosen Pembimbing telah menerima topikmu! Silahkan ke halaman Logbook untuk mengisi catatan bimbingan.
                </p>
                <a href="{{ route('mahasiswa-logbook') }}" class="btn btn-primary"><i class="fas fa-chevron-right"></i>Menuju ke
                    Halaman</a>
            </div>
            @endif
        </div>
    </main>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table-aktivitas').DataTable();
    });
</script>
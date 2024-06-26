@extends('administrator.layouts.main')
@section('title', 'Periode Ajaran')
@section('content')
    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <h2 class="mb-4">Periode Ajaran</h2>
            <p class="mb-5">Berikut data dosen pembimbing serta mahasiswa berdasarkan tahun ajaran</p>
            <div class="dropdown d-flex justify-content-between mt-3 mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <span class="text-start">Pilih Periode Ajaran</span>
                </button>
                <ul class="dropdown-menu">
                    @foreach ($periode as $p)
                        <li>
                            <a class="dropdown-item" href="{{ route('periode-ajaran', ['period' => $p->id]) }}"
                               data-period-id="{{ $p->id }}">
                                {{ $p->tahun_ajaran }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <h4 class="mt-4 mb-4">Data Dosen Pembimbing</h4>
            <div class="table-container table-admin">
                <table class="table table-bordered mb-1" id="table-dsn">
                    <thead class="table-header">
                    <tr>
                        <th>No</th>
                        <th>NPP</th>
                        <th>Nama Dosen</th>
                        <th>Bidang Kajian</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($dsnPeriod as $index => $dosen)
                        <tr>
                            <td class="centered-column">{{ $index + 1 }}</td>
                            <td class="centered-column">{{ $dosen->dosen->npp }}</td>
                            <td>{{ $dosen->dosen->nama }}</td>
                            <td class="centered-column">{{ $dosen->dosen->bidang_kajian }}</td>
                            <td class="centered-column">{{ $dosen->dosen->email }}</td>
                            <td class="centered-column">{{ $dosen->dosen->telp }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <h4 class="mt-5 mb-4">Data Mahasiswa</h4>
            <div class="table-container table-admin">
                <table class="table table-bordered mb-1" id="table-mhs">
                    <thead class="table-header">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($mhsPeriod as $index => $mahasiswa)
                        <tr>
                            <td class="centered-column">{{ $index + 1 }}</td>
                            <td class="centered-column">{{ $mahasiswa->mahasiswa->nim }}</td>
                            <td>{{ $mahasiswa->mahasiswa->nama }}</td>
                            <td class="centered-column">{{ $mahasiswa->mahasiswa->email }}</td>
                            <td class="centered-column">{{ $mahasiswa->mahasiswa->telp }}</td>
                        </tr>
                    @endforeach
                    </tbody>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table-dsn').DataTable();
            $('#table-mhs').DataTable();
        });
        $('.dropdown-item').on('click', function (e) {
            e.preventDefault();
            var periodId = $(this).data('period-id');
            filterTablesByPeriod(periodId);
            window.history.pushState({}, '', $(this).attr('href'));

            // Kirim permintaan AJAX ke controller
            $.ajax({
                url: '{{ route("periode-ajaran-update") }}', // Ganti dengan nama route yang sesuai
                method: 'POST',
                data: {period_id: periodId, _token: '{{ csrf_token() }}'}, // Sertakan CSRF token
                success: function (response) {
                    if (response.success) {
                        // Update berhasil, lakukan tindakan lain jika diperlukan (misalnya, tampilkan notifikasi)
                        console.log('Periode berhasil diperbarui');
                    } else {
                        // Update gagal, tangani error jika diperlukan
                        console.error('Gagal memperbarui periode');
                    }
                }
            });
        });
    </script>
@endsection

@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan TA')
@section('content')
    <div class="container">
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
                <a data-toggle="pill" href="#nav-tab-dosbing" class="nav-link active rounded-pill">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Dosen Pembimbing
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" href="#nav-tab-pengajuan" class="nav-link rounded-pill">
                    <i class="fas fa-edit"></i>
                    Form Pengajuan
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" href="#nav-tab-draft" class="nav-link rounded-pill">
                    <i class="fas fa-book-open"></i>
                    Draft Pengajuan
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="nav-tab-dosbing" class="tab-pane fade show active">
                @include('mahasiswa.pengajuan_ta.pilih_dosbing')
            </div>
            <div id="nav-tab-pengajuan" class="tab-pane fade">
                @include('mahasiswa.pengajuan_ta.form_pengajuan')
            </div>
            <div id="nav-tab-draft" class="tab-pane fade">
                @include('mahasiswa.pengajuan_ta.draft_pengajuan')
            </div>
        </div>
    </div>

    <script>
        // Mengatur tampilan dosbing yang dipilih
        $('#pilihDosbingModal .btn-primary').click(function() {
            var npp = $('#pilihDosbingModal').attr('data-npp');
            var nama = $('#pilihDosbingModal').attr('data-nama');
            $('#dosen-dipilih #npp').text(npp);
            $('#dosen-dipilih #nama').text(nama);
            $('#pilihDosbingModal').modal('hide');
        });

        // Navigasi ke halaman form pengajuan
        $('#simpanForm').click(function() {
            window.location.href = '/form-pengajuan-ta'; // Ubah URL sesuai dengan URL halaman form pengajuan
        });

        // Menyimpan data ke database
        $('#ajukanForm').click(function() {
            var formData = {
                // Ambil data formulir pengajuan
            };
            var selectedDosbing = {
                npp: $('#dosen-dipilih #npp').text(),
                nama: $('#dosen-dipilih #nama').text()
            };
            // Kirim formData dan selectedDosbing ke backend untuk disimpan ke database
        });
    </script>
@endsection

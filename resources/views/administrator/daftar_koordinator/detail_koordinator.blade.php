@extends('administrator.layouts.main')
@section('title', 'Detail Koordinator')
@section('content')
    <style>
        /* Add some basic styling to make the form look good */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>

    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <img src="https://via.placeholder.com/200x200" alt="Image" class="image mt-5">
            <div class="form">
                <h2 class="mb-4">Detail Koordinator</h2>
                <form class="">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" value="DANANG WAHYU UTOMO, M.Kom" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="npp">NPP</label>
                        <input type="text" id="npp" value="0686.11.2014.583" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" value="danang.wu@dsn.dinus.ac.id" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" id="telp" value="085647846893" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="bidang-kajian">Bidang Kajian</label>
                        <input type="text" id="bidang-kajian" value="RPLD" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="keyword">Keyword</label>
                        <input type="text" id="keyword" value="Algoritma dan Struktur Data; Analisis dan Perancangan Berorientasi Objek" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Umum</label>
                        <input type="text" id="deskripsi" value="Selesaikan apa yang telah kamu mulai...keep fighting!" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea id="keterangan" class="form-control" disabled></textarea>
                    </div>
                </form>
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
@endsection

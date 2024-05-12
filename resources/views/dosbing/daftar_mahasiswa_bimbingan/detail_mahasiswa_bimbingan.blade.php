@extends('dosbing.layouts.main')
@section('title', 'Detail Mahasiswa Bimbingan')
@section('content')
    <style>
        /* Add some basic styling to make the form look good */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>

    <div class="container">
        <img src="https://via.placeholder.com/200x200" alt="Profile" class="image mt-5">
        <div class="form">
            <h2 class="mb-4">Detail Mahasiswa</h2>
            <form action="{{ route('update-mahasiswa-bimbingan', ['id' => $pengajuan->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" value="{{ $mahasiswa->nama }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="nim">Nomor Induk Mahasiswa</label>
                    <input type="text" id="nim" value="{{ $mahasiswa->nim }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="topik">Topik Penelitian</label>
                    <input type="text" id="topik" value="{{ $pengajuan->topik }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Penelitian</label>
                    <input type="text" id="judul" value="{{ $pengajuan->judul }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="bidang-kajian">Bidang Kajian</label>
                    <input type="text" id="bidang-kajian" value="{{ $pengajuan->bidang_kajian }}" class="form-control"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" id="keyword" value="{{ $pengajuan->keyword }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Umum</label>
                    <input type="text" id="deskripsi" value="{{ $pengajuan->deskripsi }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea id="keterangan" class="form-control" disabled>{{ $pengajuan->catatan }}</textarea>
                </div>
                @if ($pengajuan->status == 'PENDING')
                    <div style="display: flex; justify-content: flex-end;">
                        <button type="submit" name="status" value="ACC"
                            class="btn btn-success px-4 py-2 me-2">Setuju</button>
                        <button type="submit" name="status" value="TOLAK" class="btn btn-danger px-4 py-2">Tolak</button>
                    </div>
                @endif
            </form>
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
    </div>
@endsection

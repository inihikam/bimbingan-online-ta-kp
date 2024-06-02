@extends('mahasiswa.layouts.main')
@section('title', 'Pengajuan TA')
@section('content')
    <div class="container">
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link rounded-pill">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Dosen Pembimbing
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link rounded-pill">
                    <i class="fas fa-edit"></i>
                    Form Pengajuan
                </a>
            </li>
            <li class="nav-item">
                <a data-toggle="pill" class="nav-link active rounded-pill">
                    <i class="fas fa-book-open"></i>
                    Draft Pengajuan
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="nav-tab-draft" class="tab-pane fade show active">
                <div class="container">
                    <h4 class="mb-4">Pengajuan Tugas Akhir Ke-1</h4>
                    @if ($data)
                        <blockquote class="blockquote-primary">
                            <p class="mb-3"><b>Status: Draft</b> - Untuk mengajukan tugas akhir ke dosen pembimbing, klik
                                tombol Ajukan di bawah</p>
                        </blockquote>
                        <table class="table table-bordered mb-5">
                            <tbody>
                                <tr>
                                    <td>Jalur</td>
                                    <td>{{ $data['jalur'] }}</td>
                                </tr>
                                <tr>
                                    <td>Topik</td>
                                    <td>{{ $data['topik'] }}</td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>{{ $data['judul'] }}</td>
                                </tr>
                                <tr>
                                    <td>Bidang Kajian</td>
                                    <td>{{ $data['bidang_kajian'] }}</td>
                                </tr>
                                <tr>
                                    <td>Keyword</td>
                                    <td>{{ $data['keyword'] }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $data['deskripsi'] }}</td>
                                </tr>
                                <tr>
                                    <td>Catatan</td>
                                    <td>{{ $data['catatan'] }}</td>
                                </tr>
                                <tr>
                                    <td>Usulan Dosen Pembimbing</td>
                                    <td>{{ $dospil->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                        @if ($pengajuan->status == 'PENDING')
                            <blockquote class="blockquote-pengajuan">
                                <p class="mb-3"><b>Status: Pengajuan</b> - Proposal telah diajukan pada tanggal
                                    [{{ $pengajuan->created_at }} WIB] </p>
                            </blockquote>
                        @else
                            <blockquote class="blockquote-primary">
                                <p class="mb-3"><b>Status: Disetujui</b> - Untuk tahap selanjutnya, silahkan melakukan
                                    bimbingan
                                    dengan dosen pembimbing dengan melakukan pengisian logbook bimbingan </p>
                            </blockquote>
                        @endif
                        <table class="table table-bordered mb-5">
                            <tbody>
                                <tr>
                                    <td>Jalur</td>
                                    <td>{{ $pengajuan->jalur }}</td>
                                </tr>
                                <tr>
                                    <td>Topik</td>
                                    <td>{{ $pengajuan->topik }}</td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>{{ $pengajuan->judul }}</td>
                                </tr>
                                <tr>
                                    <td>Bidang Kajian</td>
                                    <td>{{ $pengajuan->bidang_kajian }}</td>
                                </tr>
                                <tr>
                                    <td>Keyword</td>
                                    <td>{{ $pengajuan->keyword }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $pengajuan->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <td>Catatan</td>
                                    <td>{{ $pengajuan->catatan }}</td>
                                </tr>
                                <tr>
                                    <td>Usulan Dosen Pembimbing</td>
                                    <td>{{ $dospil->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif

                    @if (count($history) > 0)
                        <p class="mb-2">Histori Penolakan Pengajuan Tugas Akhir</p>
                        <div class="table-container table-tolak">
                            <table class="table table-bordered">
                                <thead class="table-header">
                                    <th>Tanggal Pengajuan</th>
                                    <th>Alasan Penolakan</th>
                                </thead>
                                @foreach ($history as $hs)
                                    <tr>
                                        <td class="centered-column">{{ $hs->created_at }}</td>
                                        <td class="alasan-column">{{ $hs->alasan_penolakan }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                    @endif

                    @if ($data)
                        <div class="form-group row mb-3 justify-content-end"></div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('mahasiswa-pengajuan') }}" class="btn btn-danger me-2">Hapus</a>
                            <form action="{{ route('mahasiswa-pengajuan-form') }}" method="GET">
                                @csrf
                                <input type="hidden" name="jalur" value="{{ $data['jalur'] }}">
                                <input type="hidden" name="topik" value="{{ $data['topik'] }}">
                                <input type="hidden" name="judul" value="{{ $data['judul'] }}">
                                <input type="hidden" name="bidang_kajian" value="{{ $data['bidang_kajian'] }}">
                                <input type="hidden" name="keyword" value="{{ $data['keyword'] }}">
                                <input type="hidden" name="deskripsi" value="{{ $data['deskripsi'] }}">
                                <input type="hidden" name="catatan" value="{{ $data['catatan'] }}">
                                <input type="hidden" name="id_dospem" value="{{ $data['id_dospem'] }}">
                                <button type="submit" class="btn btn-warning me-2">Edit</button>
                            </form>
                            <form action="{{ route('mahasiswa-pengajuan-submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="jalur" value="{{ $data['jalur'] }}">
                                <input type="hidden" name="topik" value="{{ $data['topik'] }}">
                                <input type="hidden" name="judul" value="{{ $data['judul'] }}">
                                <input type="hidden" name="bidang_kajian" value="{{ $data['bidang_kajian'] }}">
                                <input type="hidden" name="keyword" value="{{ $data['keyword'] }}">
                                <input type="hidden" name="deskripsi" value="{{ $data['deskripsi'] }}">
                                <input type="hidden" name="catatan" value="{{ $data['catatan'] }}">
                                <input type="hidden" name="id_dospem" value="{{ $data['id_dospem'] }}">
                                <button type="submit" class="btn btn-primary me-2">Ajukan</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

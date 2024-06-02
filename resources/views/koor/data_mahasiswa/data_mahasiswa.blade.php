<!-- resources/views/koor/data_mahasiswa.blade.php -->

@extends('koor.layouts.main')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4"><b>Data Mahasiswa</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Mahasiswa
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

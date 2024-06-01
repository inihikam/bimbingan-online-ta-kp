<!-- resources/views/koor/data_dospem.blade.php -->

@extends('koor.layouts.main')
@section('title', 'Data Dosen Pembimbing')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4"><b>Data Dosen Pembimbing</b></h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Dosen Pembimbing
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dospem as $dosen)
                    <tr>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->nidn }}</td>
                        <td>{{ $dosen->prodi }}</td>
                        <td>
                            <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

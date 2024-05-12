@extends('mahasiswa.layouts.main')
@section('title','Profile Mahasiswa')
@section('content')
<div class="container">
    <h1>Profil Mahasiswa</h1>
    <!-- Tambahkan konten profil mahasiswa di sini -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informasi Pribadi</h5>
            <p class="card-text">Nama: Clara Edrea Evelyna Sony Putri</p>
            <p class="card-text">NIM: A11.2021.13374</p>
            <p class="card-text">Jurusan: Teknik Informatika</p>
            <p class="card-text">IPK: 3.94</p>
            <p class="card-text">Telepon: 08123456789</p>
            <p class="card-text">Email: clara@example.com</p>
            <!-- Tambahkan informasi profil lainnya di sini -->
        </div>
    </div>

    <!-- Informasi Dosen Wali -->
    <h1 class="mt-4">Informasi Dosen Wali</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Dosen Wali: John Doe</h5>
            <p class="card-text">Telepon: 08123456789</p>
            <p class="card-text">Email: johndoe@example.com</p>
        </div>
    </div>
</div>
@endsection

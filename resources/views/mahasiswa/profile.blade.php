@extends('mahasiswa.layouts.main')
@section('title', 'Profile Mahasiswa')
@section('content')

<div class="container">
    <h1 class="text-center mb-4">Profil Mahasiswa</h1>

    <!-- Tampilkan foto profil di bagian atas jika ada -->
    @if($mahasiswa->foto)
        <div class="text-center mb-4 profile-pic-container">
            <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Profil" class="profile-pic" id="profile-pic">
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informasi Pribadi</h5>
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
                    <p class="card-text"><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
                    <p class="card-text"><strong>Jurusan:</strong> Teknik Informatika</p>
                    <p class="card-text"><strong>IPK:</strong> {{ $mahasiswa->ipk }}</p>
                </div>
                <div class="col-md-6">
                    <p class="card-text"><strong>Telepon:</strong> {{ $mahasiswa->telp_mhs }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $mahasiswa->email }}</p>
                    <p class="card-text"><strong>Dosen Wali:</strong> {{ $mahasiswa->dosen_wali }}</p>
                </div>
            </div>

            <!-- Tombol untuk membuka pop-up upload foto -->
            <button type="button" class="btn btn-primary mt-4" onclick="openUploadPopup()">Unggah Foto Profil</button>

            <!-- Pop-up upload foto -->
            <div id="upload-popup" style="display:none;">
                <form id="upload-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="foto">Pilih Foto:</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Unggah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function openUploadPopup() {
        $('#upload-popup').show();
    }

    $(document).ready(function() {
        $('#upload-form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{ route('mahasiswa.upload_foto') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#upload-popup').hide();
                    $('#profile-pic').attr('src', data.foto);
                    // Automatically refresh the page after successful upload
                    location.reload();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>

<style>
    :root {
        --primary-color: #007bff;
        --secondary-color: #6c757d;
        --background-color: #f8f9fa;
        --text-color: #212529;
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: var(--primary-color);
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-primary:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .profile-pic-container {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-pic {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

@endsection

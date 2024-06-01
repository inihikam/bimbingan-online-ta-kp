@extends('mahasiswa.layouts.main')
@section('title', 'Profile Mahasiswa')
@section('content')
<div class="container">
    <h1>Profil Mahasiswa</h1>

    <!-- Tampilkan foto profil di bagian atas jika ada -->
    @if($mahasiswa->foto)
        <div class="text-center mb-4">
            <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Profil" class="profile-pic" id="profile-pic">
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informasi Pribadi</h5>
            <p class="card-text">Nama: {{ $mahasiswa->nama }}</p>
            <p class="card-text">NIM: {{ $mahasiswa->nim }}</p>
            <p class="card-text">Jurusan: Teknik Informatika</p>
            <p class="card-text">IPK: {{ $mahasiswa->ipk }}</p>
            <p class="card-text">Telepon: {{ $mahasiswa->telp_mhs }}</p>
            <p class="card-text">Email: {{ $mahasiswa->email }}</p>
            <p class="card-text">Dosen Wali: {{ $mahasiswa->dosen_wali }}</p>

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

<script>
    function openUploadPopup() {
        document.getElementById('upload-popup').style.display = 'block';
    }

    document.getElementById('upload-form').addEventListener('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch("{{ route('mahasiswa.upload_foto') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('upload-popup').style.display = 'none';
            document.getElementById('profile-pic').src = data.foto;
        })
        .catch(error => console.error('Error:', error));
    });
</script>
@endsection

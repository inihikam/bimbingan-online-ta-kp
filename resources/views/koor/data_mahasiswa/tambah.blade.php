<div class="modal fade" id="dialogTambah" tabindex="-1" aria-labelledby="dialogTambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambah">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <blockquote class="blockquote-primary">
                        <p class="mb-3">Form dengan tanda asterik (<span class="required">*</span>) wajib diisi.</p>
                    </blockquote>
                    <form method="POST" action="{{ route('mahasiswa.store') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="inputNIM" class="col-sm-2 col-form-label">NIM <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIM" name="nim" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Mahasiswa <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputIPK" class="col-sm-2 col-form-label">IPK <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputIPK" name="ipk" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputTranskripNilai" class="col-sm-2 col-form-label">Transkrip Nilai <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTranskripNilai" name="transkrip_nilai" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputTelpMhs" class="col-sm-2 col-form-label">Telp Mahasiswa <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTelpMhs" name="telp_mhs" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputDosenWali" class="col-sm-2 col-form-label">Dosen Wali <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDosenWali" name="dosen_wali" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

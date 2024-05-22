<div class="modal fade" id="dialogTambah" tabindex="-1" aria-labelledby="dialogTambah" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogTambah">Tambah Data Dosbing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <blockquote class="blockquote-primary">
                        <p class="mb-3">Form dengan tanda asterik (<span class="required">*</span>) wajib diisi.</p>
                    </blockquote>
                    <form>
                        <div class="form-group row mb-3">
                            <label for="inputNPP" class="col-sm-2 col-form-label">NPP <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="topik" class="form-control" id="inputNPP">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Dosbing <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="topik" class="form-control" id="inputNama">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputBidangKajian" class="col-sm-2 col-form-label">Bidang Kajian <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <select class="form-select" id="inputBidangKajian" aria-label="Bidang Kajian">
                                    <option disabled selected hidden>Pilih Bidang Kajian</option>
                                    <option value="SC">SC</option>
                                    <option value="RPLD">RPLD</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputKuota" class="col-sm-2 col-form-label">Kuota Mhs TA (Baru) <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="topik" class="form-control" id="inputKuota">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputAjuan" class="col-sm-2 col-form-label">Jumlah Ajuan <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="topik" class="form-control" id="inputAjuan">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h4 class="mb-4">Pengajuan TA</h4>
    <blockquote class="blockquote-primary">
        <p class="mb-3">Form dengan tanda asterik (<span class="required">*</span>) wajib diisi.</p>
    </blockquote>
    <form>
        <div class="form-group row mb-3">
            <label for="inputTopik" class="col-sm-2 col-form-label">Topik <span class="required">*</span></label>
            <div class="col-sm-10">
                <input type="topik" class="form-control" id="inputTopik" placeholder="Masukkan Topik TA">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul <span class="required">*</span></label>
            <div class="col-sm-10">
                <input type="judul" class="form-control" id="inputJudul" placeholder="Masukkan Judul TA">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputBidang" class="col-sm-2 col-form-label">Bidang Kajian <span class="required">*</span></label>
            <div class="col-sm-3">
                <select class="form-select" id="inputBidang" aria-label="Bidang Kajian">
                    <option disabled selected hidden>Pilih Bidang Kajian</option>
                    <option value="SC">SC</option>
                    <option value="RPLD">RPLD</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputKeyword" class="col-sm-2 col-form-label">Keyword <span class="required">*</span></label>
            <div class="col-sm-10">
                <input type="keyword" class="form-control" id="inputKeyword" placeholder="Masukkan Keyword TA">
                <div id="keywordHelp" class="form-text">
                    Pisahkan antar keyword dengan tanda semikolon ( ; ).
                </div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi <span class="required">*</span></label>
            <div class="col-sm-10">
                <input type="deskripsi" class="form-control" id="inputDeskripsi" placeholder="Masukkan Deskripsi">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputCatatan" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputCatatan" rows="3" placeholder="Masukkan Catatan"></textarea>
            </div>
        </div>
        <div class="form-group row mb-3 justify-content-end">
            <div class="col-sm-1 d-flex justify-content-end">
                <button type="button" class="btn btn-secondary me-2">Kembali</button>
                <button type="button" class="btn btn-primary me-2">Simpan</button>
            </div>
        </div>
    </form>
</div>
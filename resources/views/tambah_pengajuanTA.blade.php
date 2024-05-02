<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pengajuanTA.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Tambah Pengajuan Tugas Akhir</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-edit"></i> Tambah Pengajuan Tugas Akhir </a>
        </div>
    </nav>

    <!--container-->
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
                <div class="col-sm-2">
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
            <div class="form-group row mb-3">
                <div class="col-sm-1 d-flex justify-content-start">
                    <button type="back" class="btn btn-secondary me-2">Kembali</button>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

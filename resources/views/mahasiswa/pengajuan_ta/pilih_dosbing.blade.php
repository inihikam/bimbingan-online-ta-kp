<div class="container">
    <h4 class="mb-4">Pemilihan Dosen Pembimbing</h4>
    <p class="mb-2">Berikut ini adalah daftar dosen pembimbing yang tersedia</p>
    <blockquote class="blockquote-primary">
        <p class="mb-3">Klik tombol panah <button type="button" class="btn btn-warning"><i class="fas fa-chevron-circle-right"></i></button> untuk memilih dosen pembimbing</p>
    </blockquote>
    <div class="input-group justify-content-end mb-3">
        <input type="text" class="form-control" placeholder="Cari Dosen">
        <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
    </div>
    <div class="table-container table-dosbing">
        <table class="table table-bordered mb-1">
            <thead class="table-header">
                <th>No</th>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Sisa Kuota</th>
                <th>Aksi</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">0606107401</td>
                <td>YANI PARTI ASTUTI, S.SI, M.Kom</td>
                <td class="centered-column">3</td>
                <td class="centered-column"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pilihDosbingModal"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
            <tr>
                <td class="centered-column">2</td>
                <td class="centered-column">0618038701</td>
                <td>ADHITYA NUGRAHA, S.Kom, M.CS</td>
                <td class="centered-column">3</td>
                <td class="centered-column"><button type="button" class="btn btn-warning"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
            <tr>
                <td class="centered-column">3</td>
                <td class="centered-column">0625078504</td>
                <td>ARDYTHA LUTHFIARTA, M.Kom</td>
                <td class="centered-column">3</td>
                <td class="centered-column"><button type="button" class="btn btn-warning"><i class="fas fa-chevron-circle-right"></i></button></td>
            </tr>
        </table>
    </div>
    <nav aria-label="pageNavigationDosbing">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    <h4 class="mb-4">Dosen yang Dipilih</h4>
    <div class="table-container">
        <table class="table table-bordered">
            <thead class="table-header">
                <th>No</th>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
            </thead>
            <tr>
                <td class="centered-column">1</td>
                <td class="centered-column">0618038701</td>
                <td>ADHITYA NUGRAHA, S.Kom, M.CS</td>
                <td class="centered-column"><button type="button" class="btn btn-danger"><i class="fas fa-trash" data-bs-toggle="modal" data-bs-target="#hapusDosbingModal"></i></button></td>
            </tr>
        </table>
    </div>

    <div class="form-group row mb-3 justify-content-end">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary"><i class="fas fa-chevron-right"></i>Lanjutkan</button>
        </div>
    </div>
    </form>
</div>

<!-- Modal Pilih Dosbing -->
<div class="modal fade" id="pilihDosbingModal" tabindex="-1" aria-labelledby="pilihDosbingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pilihDosbingModalLabel">Pilih Dosen Pembimbing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin untuk memilih dosen pembimbing <span id="selectedDosenName"></span> ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary">Ya</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Dosbing -->
<div class="modal fade" id="hapusDosbingModal" tabindex="-1" aria-labelledby="hapusDosbingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusDosbingModalLabel">Hapus Dosen Pembimbing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Yakin untuk menghapus dosen pembimbing ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary">Ya</button>
            </div>
        </div>
    </div>
</div>
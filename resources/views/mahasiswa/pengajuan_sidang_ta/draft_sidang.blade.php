<div class="container">
    <h4 class="mb-4">Proposal Sidang Ke-1</h4>
    <blockquote class="blockquote-primary">
        <p class="mb-3"><b>Status: Draft</b> - Untuk mengajukan sidang, klik tombol Ajukan di bawah</p>
    </blockquote>
    <blockquote class="blockquote-primary">
        <p class="mb-3"><b>Status: Disetujui</b> - Untuk tahap selanjutnya, silahkan klik tombol <i class="fas fa-info-circle"></i> untuk melihat informasi ujian <button type="info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialogDetailSidang"><i class="fas fa-info-circle"></i> Jadwal Sidang</button></p>
    </blockquote>
    <!--
    <blockquote class="blockquote-pengajuan">
        <p class="mb-3"><b>Status: Pengajuan</b> - Proposal telah diajukan pada tanggal [24 April 2024 10:47 WIB] </p>
    </blockquote>
    <blockquote class="blockquote-cancel">
        <p class="mb-3"><b>Status: Ditolak</b> - Pengajuan sidang dengan tanggal [24 April 2024] dengan alasan ... </p>
    </blockquote>
    -->
    <table class="table table-bordered mb-5">
        <tbody>
            <tr>
                <td>Judul</td>
                <td>Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Bidang Kajian</td>
                <td>SC / RPLD</td>
            </tr>
            <tr>
                <td>Dokumen Tugas Akhir</td>
                <td><a href="https://github.com/eiffelputri" target="_blank">https://github.com/eiffelputri</a></td>
            </tr>
            <tr>
                <td>Periode Sidang</td>
                <td>April</td>
            </tr>
        </tbody>
    </table>

    <p class="mb-2"> Histori Penolakan Pengajuan Sidang</p>
    <div class="table-container table-tolak">
        <table class="table table-bordered">
            <thead class="table-header">
                <th>Tanggal Pengajuan</th>
                <th>Alasan Penolakan</th>
            </thead>
            <tr>
                <td class="centered-column">24 April 2024 10:47 WIB</td>
                <td class="alasan-column">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, quod debitis quis possimus impedit dolores iusto molestias accusantium</td>
            </tr>
        </table>
    </div>

    <div class="form-group row mb-3 justify-content-end"></div>
    <div class="d-flex justify-content-end">
        <button type="delete" class="btn btn-danger me-2">Hapus</button>
        <button type="edit" class="btn btn-warning me-2">Edit</button>
        <button type="submit" class="btn btn-primary me-2">Ajukan</button>
    </div>
</div>

<!-- Modal Detail Sidang -->
<div class="modal fade" id="dialogDetailSidang" tabindex="-1" aria-labelledby="dialogDetailSidangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogDetailSidangLabel">Detail Jadwal Sidang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h4 class="mb-4">Jadwal Sidang Periode April</h4>
                    <table class="table table-bordered mb-5">
                        <tbody>
                            <tr>
                                <td>Tanggal Sidang</td>
                                <td>10 April 2024</td>
                            </tr>
                            <tr>
                                <td>Judul Tugas Akhir</td>
                                <td>Lorem ipsum</td>
                            </tr>
                            <tr>
                                <td>Dokumen Tugas Akhir</td>
                                <td href="https://github.com/eiffelputri">https://github.com/eiffelputri</td>
                            </tr>
                            <tr>
                                <td>Ruang Sidang</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Penguji 1</td>
                                <td>Pak A</a></td>
                            </tr>
                            <tr>
                                <td>Penguji 2</td>
                                <td>Bu A</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dialogDetailDsn" tabindex="-1" aria-labelledby="dialogDetail" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dialogDetail">Daftar Bimbingan dari Dosen [Nama]</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row my-3">
                        <div class="col-md">
                            <table id="data-detail"
                                class="table table-striped table-bordered table-responsive table-hover"
                                style="width:100%; border-color:black">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="align-middle">No.</th>
                                        <th class="align-middle">NIM</th>
                                        <th class="align-middle">Nama</th>
                                        <th class="align-middle">TA-1</th>
                                        <th class="align-middle">TA-2</th>
                                        <th class="align-middle">Bab Terakhir</th>
                                        <th class="align-middle">Jumlah Bimbingan</th>
                                        <th class="align-middle">Status</th>
                                        <th>Sidang TA1 (Gel.)</th>
                                        <th>Sidang TA2 (Gel.)</th>
                                    </tr>
                                </thead>
                                <tbody id="mahasiswaBimbinganList">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

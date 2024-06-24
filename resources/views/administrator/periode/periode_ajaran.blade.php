@extends('administrator.layouts.main')
@section('title', 'Periode Ajaran')
@section('content')
    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <h2 class="mb-4">Periode Ajaran</h2>
            <p class="mb-5">Berikut data dosen pembimbing serta mahasiswa berdasarkan tahun ajaran</p>
            <div class="dropdown d-flex justify-content-between mt-3 mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="text-start">Pilih Periode Ajaran</span>
                </button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">2020_01</button></li>
                    <li><button class="dropdown-item" type="button">2020_02</button></li>
                    <li><button class="dropdown-item" type="button">2021_01</button></li>
                    <li><button class="dropdown-item" type="button">2021_02</button></li>
                    <li><button class="dropdown-item" type="button">2022_01</button></li>
                    <li><button class="dropdown-item" type="button">2022_02</button></li>
                    <li><button class="dropdown-item" type="button">2023_01</button></li>
                    <li><button class="dropdown-item" type="button">2023_02</button></li>
                </ul>
            </div>
            <h4 class="mt-4 mb-4">Data Dosen Pembimbing</h4>
            <div class="table-container table-admin">
                <table class="table table-bordered mb-1" id="table-dsn">
                    <thead class="table-header">
                    <tr>
                        <th>No</th>
                        <th>NPP</th>
                        <th>Nama Dosen</th>
                        <th>Bidang Kajian</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="centered-column">1</td>
                        <td class="centered-column">0686.11.2012.444</td>
                        <td>ADHITYA NUGRAHA, S.Kom, M.CS</td>
                        <td class="centered-column">RPLD</td>
                        <td class="centered-column">adhitya@dsn.dinus.ac.id</td>
                        <td class="centered-column">081647563846</td>
                    </tr>
                    <tr>
                        <td class="centered-column">2</td>
                        <td class="centered-column">0686.11.2012.460</td>
                        <td>ARDYTHA LUTHFIARTA, M.Kom</td>
                        <td class="centered-column">SC</td>
                        <td class="centered-column">ardytha.luthfiarta@dsn.dinus.ac.id</td>
                        <td class="centered-column">081384759756</td>
                    </tr>
                    <tr>
                        <td class="centered-column">3</td>
                        <td class="centered-column">0686.11.2014.583</td>
                        <td>DANANG WAHYU UTOMO, M.Kom</td>
                        <td class="centered-column">RPLD</td>
                        <td class="centered-column">danang.wu@dsn.dinus.ac.id</td>
                        <td class="centered-column">081347658476</td>
                    </tr>
                    <tr>
                        <td class="centered-column">4</td>
                        <td class="centered-column">0686.11.2013.536</td>
                        <td>DEFRI KURNIAWAN, M.Kom</td>
                        <td class="centered-column">RPLD</td>
                        <td class="centered-column">defrikurniawan@gmail.com</td>
                        <td class="centered-column">081293847564</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="mt-5 mb-4">Data Mahasiswa</h4>
            <div class="table-container table-admin">
                <table class="table table-bordered mb-1" id="table-mhs">
                    <thead class="table-header">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Dosen Pembimbing</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="centered-column">1</td>
                        <td class="centered-column">A11.2021.13550</td>
                        <td>MUHAMMAD MAULANA HIKAM</td>
                        <td class="centered-column">inihikam@gmail.com</td>
                        <td class="centered-column">081465784936</td>
                        <td class="centered-column">DANANG WAHYU UTOMO, M.Kom</td>
                    </tr>
                    <tr>
                        <td class="centered-column">2</td>
                        <td class="centered-column">A11.2021.13374</td>
                        <td>CLARA EDREA EVELYNA SONY PUTRI</td>
                        <td class="centered-column">claraedrea@gmail.com</td>
                        <td class="centered-column">081475857387</td>
                        <td class="centered-column">DEFRI KURNIAWAN, M.Kom</td>
                    </tr>
                    <tr>
                        <td class="centered-column">3</td>
                        <td class="centered-column">A11.2021.13329</td>
                        <td>MUHAMMAD RIZAL PRATAMA</td>
                        <td class="centered-column">rizalpratama@gmail.com</td>
                        <td class="centered-column">081226504875</td>
                        <td class="centered-column">ARDYTHA LUTHFIARTA, M.Kom</td>
                    </tr>
                    <tr>
                        <td class="centered-column">4</td>
                        <td class="centered-column">A11.2021.13446</td>
                        <td>MUH BAGUS SAPUTRO</td>
                        <td class="centered-column">bagussaputro@gmail.com</td>
                        <td class="centered-column">081875467389</td>
                        <td class="centered-column">ADHITYA NUGRAHA, S.Kom, M.CS</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="py-4 mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bimbingan Online</div>
                    <div>
                        <a href="#" class="text-secondary">Privacy Policy</a>
                        &middot;
                        <a href="#" class="text-secondary">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Inisialisasi DataTables
        $(document).ready(function () {
            $('#table-dsn').DataTable();
            $('#table-mhs').DataTable();
        });
    </script>
@endsection

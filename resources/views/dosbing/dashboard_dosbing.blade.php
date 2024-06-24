@extends('dosbing.layouts.main')
@section('title', 'Dashboard Dosbing')
@section('content')
    <div class="wrapper d-flex flex-column min-vh-100">
        {{--        <nav class="sb-topnav navbar navbar-expand">--}}
        {{--            <!-- Navbar Search-->--}}
        {{--            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">--}}
        {{--                <div class="input-group">--}}
        {{--                    <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..."--}}
        {{--                           aria-describedby="btnNavbarSearch" />--}}
        {{--                    <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>--}}
        {{--                </div>--}}
        {{--            </form>--}}
        {{--            <!-- Navbar-->--}}
        {{--            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">--}}
        {{--                <li class="nav-item dropdown">--}}
        {{--                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"--}}
        {{--                       data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>--}}
        {{--                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
        {{--                        <li><a class="dropdown-item" href="#!">Settings</a></li>--}}
        {{--                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>--}}
        {{--                        <li>--}}
        {{--                            <hr class="dropdown-divider" />--}}
        {{--                        </li>--}}
        {{--                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </nav>--}}
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"><b>Welcome, {{ $dosen->nama }}!</b></h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4" id="card-view">
                            <div class="card-body"><b>Mahasiswa Bimbingan</b></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('mahasiswa-bimbingan') }}">See
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4" id="card-view">
                            <div class="card-body"><b>Logbook Mahasiswa</b></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('dosbing-logbook') }}">See
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4" id="card-view">
                            <div class="card-body"><b>Mahasiswa Sidang</b></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link"
                                   href="{{ route('dosbing-daftar-mahasiswa-sidang') }}">See
                                    Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4" id="card-view">
                            <div class="card-body"><b>Tentang Kami</b></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/about">See Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Chart Mahasiswa Bimbingan
                            </div>
                            <div class="card-body">
                                <canvas id="barchartmhs" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Chart Mahasiswa Sidang
                            </div>
                            <div class="card-body">
                                <canvas id="barchartdsn" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Log Bimbingan
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="tableID">
                            {{-- Mengambil data logbook --}}
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Logbook</th>
                                <th>Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($logbook as $log)
                                @php
//                                    $statusMhs = $status->where('id_mhs', $log->id_mhs)->first();
//                                    $detailMhs = $mhs->where('nim', $statusMhs->nim)->first();
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $log->mahasiswa->nama }}</td>
                                    <td>{{ $log->uraian_bimbingan }}</td>
                                    <td>{{ $log->tanggal_bimbingan }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
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
@endsection

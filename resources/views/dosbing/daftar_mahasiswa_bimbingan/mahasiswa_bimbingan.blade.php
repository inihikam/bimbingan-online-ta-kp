@extends('dosbing.layouts.main')
@section('title', 'Mahasiswa Bimbingan')
@section('content')
    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container flex-grow-1">
            <h3 class="mb-3"><b>Daftar Pengajuan Mahasiswa Bimbingan</b></h3>
            <p class="mb-2">Berikut ini adalah daftar pengajuan mahasiswa bimbingan</p>
            <div class="input-group justify-content-end mb-3">
                <input class="form-control" type="text" placeholder="Search here..." aria-label="Search for..."
                       aria-describedby="btnNavbarSearch" />
                <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
            <div class="table-container table-dosbing">
                <table class="table table-bordered mb-1">
                    <thead class="table-header">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Foto</th>
                    <th>IPK</th>
                    <th>Topik Penelitian</th>
                    <th>Status</th>
                    </thead>
{{--                    @foreach ($pengajuan as $pj)--}}
{{--                        <tr>--}}
{{--                            @php--}}
{{--                                $mhs = $mahasiswa->where('id_mhs', $pj->id_mhs)->first();--}}
{{--                                $detail = $bimbingan->where('nim', $mhs->nim)->first();--}}
{{--                            @endphp--}}
{{--                            <td class="centered-column">{{ $loop->iteration }}</td>--}}
{{--                            <td class="centered-column">{{ $mhs->nim }}</td>--}}
{{--                            <td class="centered-column">{{ $detail->nama }}</td>--}}
{{--                            <td class="centered-column">{{ $detail->ipk }}</td>--}}
{{--                            <td class="centered-column">--}}
{{--                                <a href="{{ route('detail-mahasiswa-bimbingan', ['id' => $pj->id]) }}" class="btn btn-warning">--}}
{{--                                    <i class="fas fa-info-circle"></i>--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    <tr class="centered-column">
                        <td>1</td>
                        <td>A11.2021.13550</td>
                        <td>Muhammad Maulana Hikam</td>
                        <td>
                            <a href="#" class="btn btn-warning"><i class="fa-solid fa-images"></i></a>
                        </td>
                        <td>3.84</td>
                        <td>Aplikasi Identifikasi Penyakit Kanker</td>
                        <td class="centered-column">
                            <button type="submit" name="status" class="btn btn-success" value="ACC"><i
                                    class="fa-regular fa-circle-check"></i></button>
                            <button type="submit" name="status" class="btn btn-danger delete-button" value="REVISI"><i
                                    class="fa-regular fa-circle-xmark"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
            {{ $pengajuan->links() }}
            {{-- <nav aria-label="pageNavigationDosbing">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-regular fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">40</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-regular fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav> --}}
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    Swal.fire({
                        title: 'Pengajuan ingin ditolak?',
                        text: "Pengajuan ditolak tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, tolak!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Proses penghapusan data di sini
                            Swal.fire(
                                'Success!',
                                'Pengajuan berhasil ditolak',
                                'success'
                            );
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            // Batalkan penghapusan
                            Swal.fire(
                                'Canceled!',
                                'Pengajuan gagal ditolak',
                                'error'
                            );
                        }
                    });
                });
            });
        });
    </script>
@endsection

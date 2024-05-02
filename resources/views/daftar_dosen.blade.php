<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Dosen</title>
    {{--CSS Custom--}}
    <link rel="stylesheet" href="../css/daftar_dosen.css">
    {{--Boostrap CSS--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{--Font Awesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
    <h4 class="mt-3">Daftar Dosen</h4>
        <p>Berikut ini adalah daftar dosen</p>

    {{--Search View--}}
        <form action="#">
            <div class="container d-flex justify-content-end mb-3">
                <div class="search-bar">
                    <input type="text" id="search" name="search" placeholder="Search">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    {{--Body Content--}}
    <table class="table table-striped table-bordered text-center">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>0606107401</td>
                <td>YANI PARTI ASTUTI, S.SI, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>0613128502</td>
                <td>DEFRI KURNIAWAN, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>0618038701</td>
                <td>ADHITYA NUGRAHA, S.Kom, M.CS</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>0625078504</td>
                <td>ARDYTHA LUTHFIARTA, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>0612029001</td>
                <td>EGIA ROSI SUBHIYAKTO, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>0615127404</td>
                <td>AJIB SUSANTO, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>0616088801</td>
                <td>DANANG WAHYU UTOMO, M.Kom</td>
                <td><button type="button" class="btn btn-warning"><i class="fas fa-sharp fa-circle-chevron-right"></i></button></td>
            </tr>
        </tbody>
    </table>
        {{--Pagination--}}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mb-5">
                <li class="page-item disabled">
                    <a class="page-link"><i class="fas fa-sharp fa-chevron-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">40</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-sharp fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    <h4 class="mb-4">Dosen yang Dipilih</h4>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>0618038701</td>
            <td>ADHITYA NUGRAHA, S.Kom, M.CS</td>
            <td><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
        </tbody>
    </table>
    </div>
</body>
    {{--Boostrap JS--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{--Popper JS--}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</html>

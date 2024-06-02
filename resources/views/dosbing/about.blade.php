@extends('dosbing.layouts.main')
@section('title', 'About Us')
@section('content')
    <style>
        .container {
        margin: 20px auto;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 10px;
    }
    </style>

    <div class="wrapper d-flex flex-column min-vh-100">
        <div class="container-fluid">
            <div class="container flex-grow-1">
                <div class="row">
                    <div class="col-md-6 ms-5 py-5">
                        <h2>Bimbingan Online Ready to Help</h2>
                        <p>Bimbingan online bagi mahasiswa akhir menciptakan ruang kolaboratif virtual yang memungkinkan interaksi antara mahasiswa dan dosen pembimbing secara langsung. Dengan kemudahan akses dan fleksibilitas waktu yang diberikan, mahasiswa dapat memperoleh bimbingan yang mendalam untuk mengembangkan proyek tugas akhir mereka. Pendekatan ini tidak hanya memanfaatkan kemajuan teknologi, tetapi juga membuka peluang baru dalam pengembangan ilmu pengetahuan, memperkaya pengalaman belajar mahasiswa, dan meningkatkan kualitas penelitian akademik secara menyeluruh. Bimbingan online menciptakan ekosistem pembelajaran yang inklusif, dinamis, dan terjangkau bagi para mahasiswa akhir.</p>
                    </div>
                    <div class="col-md-5 py-3 ms-3">
                        <img src="https://img.freepik.com/free-vector/ui-ux-team-concept-illustration_114360-14912.jpg?w=900&t=st=1715261974~exp=1715262574~hmac=2c274ca6d997e4634dd94040960443ac5b67956347830ac58e98dfc3c8ea94ad" alt="Image Content" class="img-fluid">
                    </div>
                </div>
                <div class="container text-center py-2">
                    <div class="text-center">
                        <h3>Our Goals</h3>
                        <p>Tujuan utama dari bimbingan online adalah memfasilitasi interaksi langsung antara mahasiswa dan dosen pembimbing, memberikan bimbingan yang mendalam untuk pengembangan proyek tugas akhir, serta meningkatkan kualitas akademik melalui umpan balik konstruktif. Selain itu, bimbingan online juga bertujuan untuk memastikan aksesibilitas dan fleksibilitas bagi mahasiswa dalam mendapatkan bimbingan, mendorong kolaborasi dan pertukaran ide, serta memperluas jangkauan pembimbingan dengan memanfaatkan teknologi.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top:20px; margin-bottom:20px">
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://img.freepik.com/free-vector/organic-flat-computer-programming-illustration_23-2148955256.jpg?w=900&t=st=1715261667~exp=1715262267~hmac=5978c2bc691b46d302572b5648fc6a0bf83b484df10b08fa7d28f5fc7fb4f8d8" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Dosen pembimbing tampak penuh dedikasi dan antusias dalam membantu mahasiswanya mengembangkan proyek akhir. Sebagai seoarang dosen pembimbing harus memiliki sikap penuh perhatian dan kesabaran saat mendengarkan ide-ide mahasiswanya, serta memberikan arahan dan masukan yang berguna untuk memperbaiki dan mengembangkan proyek tersebut lebih lanjut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://img.freepik.com/free-vector/software-tester-concept-illustration_114360-16115.jpg?w=900&t=st=1715262296~exp=1715262896~hmac=20eebad3ded2f04fd250b197801df2fca204227a33a28486b8e52634159968a8" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Sebelum dilakukan implementasi penuh, setiap proyek perlu mengikuti serangkaian proses uji testing yang ketat dan komprehensif guna memverifikasi kebenaran, kinerja, dan keandalan sesuai dengan standar yang telah ditetapkan. Tujuan dari tahap uji ini adalah untuk memastikan bahwa proyek tersebut memenuhi semua persyaratan yang telah ditetapkan serta mencapai hasil yang diharapkan dengan tingkat optimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://img.freepik.com/free-vector/flat-design-cms-illustration_23-2148825220.jpg?w=900&t=st=1715262411~exp=1715263011~hmac=0caa59ebd0f6b68a8de857a9b9cf11f67780ec08a72b8188176669b891624da7" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Content Management System adalah platform perangkat lunak yang memungkinkan pengguna untuk membuat, mengelola, dan memperbarui konten secara efisien di situs web tanpa perlu pengetahuan teknis mendalam. Ini mencakup fungsi-fungsi seperti pengeditan konten, manajemen pengguna, dan pengaturan tata letak, memudahkan pengelolaan situs web dengan cepat dan mudah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-2 mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://img.freepik.com/free-vector/waterfall-method-concept-illustration_114360-13022.jpg?w=900&t=st=1715265158~exp=1715265758~hmac=0c72f5c82cd0304aca7ababcb750b3e782345bb6da3de92ba8a288bd28e4f9a5" alt="" style="width: 35rem; padding-left:10px;">
                        </div>
                        <div class="col-md-6" style="padding-top:30px; padding-right: 50px">
                            <h2>Always Here to Assist Online</h2>
                            <p>Bimbingan online memfasilitasi mahasiswa dalam setiap tahap pengembangan perangkat lunak yaitu analisis kebutuhan, perancangan, implementasi, pengujian, dan pemeliharaan. Dosen pembimbing memberikan panduan melalui diskusi online dan pertemuan video, membantu dalam merumuskan kebutuhan, merancang struktur sistem, menulis kode, merencanakan pengujian, dan memperbaiki bug. Dengan bimbingan langsung, mahasiswa dapat mengatasi tantangan teknis, memahami praktik terbaik, dan memastikan kualitas dan fungsionalitas proyek yang mereka kembangkan. Ini memungkinkan pembelajaran yang efektif dan pengembangan keterampilan yang diperlukan untuk kesuksesan dalam dunia pengembangan perangkat lunak.</p>
                        </div>
                    </div>
                </div>
                <div class="container text-center mb-2">
                    <div class="text-center py-3">
                        <h3>Latest News</h3>
                        <p>Berita acara ini merupakan sebuah berita terkini yang mengulas perkembangan terbaru dan terpenting dari FIK Universitas Dian Nuswantoro. Deskripsi konten ini akan memberikan wawasan menyeluruh tentang dinamika dan kemajuan yang terjadi di lingkungan universitas, memastikan terhadap para pembaca tetap mendapatkan informasi dan terhubung dengan perkembangan terbaru dalam dunia akademis dan kampus.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top:20px; margin-bottom:20px">
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpa5glRhTnaF0z0i-m0EXXfpfjf6WfmdgVU81H-B2OFf8nTaZtPmriOL8LXQKjumGpEGQ&usqp=CAU" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">FIK UDINUS GELAR FIK STUDENT AWARDS 2023</h5>
                                    <p class="card-text">Terdapat 170 peserta yang terlibat dalam acara tersebut. Peserta terbagi menjadi 9 tim PPK Ormawa, 5 di antaranya sudah lolos tingkat DIKTI dan 7 tim PKM yang telah lolos seleksi administrasi oleh DIKTI.</p>
                                    <a href="https://dinus.ac.id/2023/06/berikan-apresiasi-dan-dorong-mahasiswa-untuk-terus-berprestasi-fik-udinus-gelar-fik-student-awards-2023/" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://dinus.ac.id/wp-content/uploads/2023/09/Tim-InRaga-980x614.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">APLIKASI INRAGA, MAHASISWA FIK UDINUS BANTU KELOLA UMKM DI BIDANG OLAHRAGA</h5>
                                    <p class="card-text">Lima mahasiswa Universitas Dian Nuswantoro (Udinus) ciptakan aplikasi untuk memudahkan dalam mempromosikan dan mengelola UMKM di bidang olahraga.</p>
                                    <a href="https://dinus.ac.id/2023/09/ciptakan-aplikasi-inraga-mahasiswa-fik-udinus-bantu-kelola-umkm-di-bidang-olahraga/" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 22rem;">
                                <img src="https://dinus.ac.id/wp-content/uploads/2022/12/SINERGIKAN-AI-DENGAN-ROBOTIKA-COE-UDINUS-KENALKAN-ARTS-KEPADA-DOSEN-FIK-DAN-FT-1080x675.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-weight:bold">SINERGIKAN AI DENGAN ROBOTIKA</h5>
                                    <p class="card-text">ARTS ini merupakan buatan dari PT Sari Teknologi, semacam modul yang fungsinya belajar meletakkan AI atau Machine Learning di dalam robot yang nantinya akan digabungkan secara otomatis.</p>
                                    <a href="https://dinus.ac.id/2022/12/sinergikan-ai-dengan-robotika-coe-udinus-kenalkan-arts-kepada-dosen-fik-dan-ft-2/" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 px-3 py-2 ms-3">
                            <h2>Online Help On Standby</h2>
                            <p>Para dosen pembimbing telah dipersiapkan dan siap memberikan bantuan yang tak tertandingi kepada para mahasiswa dalam setiap tahap perjalanan pengembangan proyek. Dengan keahlian yang mendalam dalam bidang mereka, mereka menawarkan panduan yang teliti dan solusi yang inovatif untuk mengatasi setiap hambatan yang mungkin dihadapi mahasiswa. Melalui komunikasi yang intensif dan bimbingan pribadi, para mentor mengarahkan mahasiswa menuju pencapaian hasil yang maksimal. Dengan kehadiran mereka yang konsisten, mahasiswa dapat mengatasi tantangan teknis dan konseptual dengan keyakinan, memastikan bahwa proyek mereka berkembang sesuai dengan standar tertinggi dalam IPTEK.</p>
                        </div>
                        <div class="col-md-5">
                            <img src="https://img.freepik.com/free-vector/scrum-method-concept-illustration_114360-13019.jpg?w=900&t=st=1715262450~exp=1715263050~hmac=94795d5b83bafe3c4a0b7ea232d7f417230bd3e123c599509c8dbe1e7469a255" alt="" style="width: 35rem;">
                        </div>
                    </div>
                </div>
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
@endsection

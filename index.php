<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSB SEKOLAH SWASTA | Tugas Akhir DTS 2019</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" integrity="sha256-KLTFyUm/U7eSNct2I+KNcZ5+O4WHsa83bK34m3uGWsU=" crossorigin="anonymous" />
    <style>
        .bg-kolom {
            background-image: url("assets/img/bg-info.png");
        }

        .bg-atas {
            background-image: url("assets/img/bg-atas.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand p-2" href="#"><img src="assets/img/logo.png" width="70%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="view/home/profil.php">Profil</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="view/home/guru.php">Data Guru</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="view/home/kegiatan.php">Galeri</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="view/home/berita.php">Berita</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-white bg-info animated infinite bounce" href="view/home/pengumuman.php">Pengumuman PSB</a>
                    </li>
                    <li class="nav-item p-2">
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle py-2 px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if (isset($_SESSION['role'])) {
                                    if (($_SESSION['role']) == 'siswa') {
                                        echo $_SESSION['nama_siswa'];
                                    } elseif (($_SESSION['role']) == 'admin') {
                                        echo $_SESSION['nama_admin'];
                                    }
                                } else {
                                    echo "Masuk / Daftar";
                                } ?>
                            </button>
                            <div class="dropdown-menu">
                                <?php if (isset($_SESSION['role'])) {
                                    echo '<a class="dropdown-item pl-3 pr-3" href="controller/auth/logout.php">Logout</a>';
                                } else {
                                    echo '<a class="dropdown-item pl-3 pr-3" href="view/home/login.php">Masuk</a>';
                                    echo '<a class="dropdown-item pl-3 pr-3" href="view/home/daftar.php">Daftar</a>';
                                } ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <?php
            if (isset($_SESSION['role'])) {
                if (($_SESSION['role']) == 'siswa') { ?>
                    <a class="nav-link btn btn-outline-success" href="view/siswa/dashboard.php" data-toggle="tooltip" data-placement="right" title="Ke Dashboard Siswa">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                <?php
                } elseif (($_SESSION['role']) == 'admin') { ?>
                    <a class="nav-link btn btn-outline-success" href="view/admin/dashboard.php" data-toggle="tooltip" data-placement="right" title="Ke Halaman Admin">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                <?php
                }
            }
            ?>
        </div>
    </nav>
    <!-- End Navbar -->
    <main role="main">
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/slider/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider/slide2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider/slide3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- finish Carousel -->
        <section class="bg-atas">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mt-4 mb-4 pl-4 pr-4">
                        <div class="card p-4 text-center bg-kolom">
                            <h4><i class="far fa-2x fa-question-circle"></i></h4>
                            <h3>Info pendaftaran</h3>
                            <p>Info penting seputar Pendaftaran siswa baru</p>
                            <div class="mx-auto mt-4" style="width: 150px;">
                                <a class="btn btn-block btn-primary p-2" href="#info">Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 mb-4 pl-4 pr-4">
                        <div class="card p-4 text-center bg-kolom">
                            <h4><i class="fas fa-2x fa-tasks"></i></h4>
                            <h4>Alur Pendaftaran</h4>
                            <p>Prosedur yang harus kamu ikuti dalam proses Pendaftaran</p>
                            <div class="mx-auto mt-4" style="width: 150px;">
                                <a class="btn btn-block btn-primary p-2" href="#alur">Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 mb-4 pl-4 pr-4">
                        <div class=" card p-4 text-center bg-kolom">
                            <h4><i class="fas fa-2x fa-bullhorn"></i></h4>
                            <h4 class="text-center">Pengumuman</h4>
                            <p>Pengumuman seleksi penerimaan siswa baru</p>
                            <div class="mx-auto mt-4" style="width: 150px;">
                                <a class="btn btn-block btn-primary p-2" href="view/home/pengumuman.php">Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="info" class="bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="assets/img/info-kiri.png" alt="info PSB" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
                        <h2 class="pb-4">Info Pendaftaran</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, sit quas nulla perspiciatis assumenda nam illum placeat. Ea temporibus, dolor accusantium saepe laudantium non eum, id obcaecati voluptate, vel fugiat?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, sit quas nulla perspiciatis assumenda nam illum placeat. Ea temporibus, dolor accusantium saepe laudantium non eum, id obcaecati voluptate, vel fugiat?</p>
                        <button class="btn btn-outline-info btn-lg" href="#">Download Brosur</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="info" class="bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <?php
                        include("database/koneksi.php");
                        $result = mysqli_query($koneksi, "SELECT * from waktu where id='1'");
                        while ($pendaftar = mysqli_fetch_array($result)) {
                            $tanggal = $pendaftar['tanggal'];
                            $bulan = $pendaftar['bulan'];
                            $tahun = $pendaftar['tahun'];
                        }
                        $awal  = new DateTime($tahun . '-' . $bulan . '-' . $tanggal);
                        $akhir = new DateTime(); // Waktu$ sekarang
                        $diff  = $awal->diff($akhir);
                        $days    = (int) ((mktime(0, 0, 0, $bulan, $tanggal, $tahun) - time()) / 86400);
                        if ($days >= 1) {
                            ?>
                            <div class="bg-light border border-primary" style="padding:20px;">
                                <h1 class="text-center">Pendaftaran Ditutup Dalam Waktu : </h1>
                                <h2 class="text-center"><?php echo $diff->d; ?> Hari <?php echo $diff->h; ?> Jam <?php echo $diff->i; ?> Menit <?php echo $diff->s; ?> Detik</h2>
                            </div>
                        <?php
                        } else {
                            ?>
                            <div class=" bg-info">
                                <h3>Pendaftaran Ditutup</h3>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="alur" class="bg-white">
            <div class="container py-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
                        <h2 class="pb-4">Alur Pendaftaran</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, sit quas nulla perspiciatis assumenda nam illum placeat. Ea temporibus, dolor accusantium saepe laudantium non eum, id obcaecati voluptate, vel fugiat?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, sit quas nulla perspiciatis assumenda nam illum placeat. Ea temporibus, dolor accusantium saepe laudantium non eum, id obcaecati voluptate, vel fugiat?</p>
                        <button class="btn btn-outline-info btn-lg" type="button" class="btn btn-primary" data-toggle="modal" data-target="#gambar-alur">Selengkapnya</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="assets/img/alur.png" alt="info PSB" width="100%">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="alamat" class="bg-light">
            <div class="container py-5 ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7128723080223!2d110.37644781432671!3d-7.820185679828567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5708362fefe7%3A0x517cc24c29f41196!2sJl.+Sorosutan%2C+Sorosutan%2C+Kec.+Umbulharjo%2C+Kota+Yogyakarta%2C+Daerah+Istimewa+Yogyakarta+55162!5e0!3m2!1sid!2sid!4v1563852247273!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
                        <h2 class="pb-4">Alamat Sekolah</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum expedita dignissimos sit facere saepe quidem, inventore commodi doloremque in tempore recusandae quod rerum tenetur facilis dolores nemo esse quos suscipit!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum expedita dignissimos sit facere saepe quidem, inventore commodi doloremque in tempore recusandae quod rerum tenetur facilis dolores nemo esse quos suscipit!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="gambar-alur" tabindex="-1" role="dialog" aria-labelledby="gambar-alur" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Alur Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/alur.png" alt="info PSB" width="100%">
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-dark">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 pt-3 text-white-50">
                    <img src="assets/img/logo.png" width="80%">
                    <div class="container text-center">
                        <h5 class="mt-4 text-center">Sosial Media</h5>
                        <a class="text-white-50" href="#"><i class="fab fa-2x fa-instagram p-2"></i></a>
                        <a class="text-white-50" href="#"><i class="fab fa-2x fa-facebook p-2"></i></a>
                        <a class="text-white-50" href="#"><i class="fab fa-2x fa-twitter p-2"></i></a>
                        <a class="text-white-50" href="#"><i class="fab fa-2x fa-youtube p-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-white-50 pt-3">
                    <div class="container">
                        <h5>Alamat</h5>
                        <p>Jl. Raya Pondok Aren, jombang, No.15<br>
                            Pondok Kacang timur, pondok Aren<br>
                            Tangerang Selatan, BANTEN <br>
                        </p>
                        <p>
                            Telp : 021-983919<br>
                            Fax : 021-983919
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-white-50 pt-3">
                    <div class="container">
                        <h5>Link Eksternal</h5>
                        <a class="text-white-50 m-2" href="#">Website Sekolah</a><br>
                        <a class="text-white-50 m-2" href="#">Online Library</a><br>
                        <a class="text-white-50 m-2" href="#">SISFO sekolah</a><br>
                        <a class="text-white-50 m-2" href="#">Arsip Penelitian</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container text-white-50">
                <p class="text-center">Copyright 2019</p>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.js"></script>
</body>

</html>
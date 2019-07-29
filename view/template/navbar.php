    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand p-2" href="#"><img src="../../assets/img/logo.png" width="70%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active p-2">
                        <a class="nav-link" href="../../index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="../../view/home/profil.php">Profil</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="../../view/home/guru.php">Data Guru</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="../../view/home/kegiatan.php">Galeri</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="../../view/home/berita.php">Berita</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-white bg-info animated infinite bounce" href="../../view/home/pengumuman.php">Pengumuman PSB</a>
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
                                    echo '<a class="dropdown-item pl-3 pr-3" href="../controller/auth/logout.php">Logout</a>';
                                } else {
                                    echo '<a class="dropdown-item pl-3 pr-3" href="../home/login.php">Masuk</a>';
                                    echo '<a class="dropdown-item pl-3 pr-3" href="../home/daftar.php">Daftar</a>';
                                } ?>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <?php
            if (isset($_SESSION['role'])) {
                if (($_SESSION['role']) == 'siswa') { ?>
                    <a class="nav-link btn btn-outline-success" href="../siswa/dashboard.php" data-toggle="tooltip" data-placement="right" title="Ke Dashboard Siswa">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                <?php
                } elseif (($_SESSION['role']) == 'admin') { ?>
                    <a class="nav-link btn btn-outline-success" href="../admin/dashboard.php" data-toggle="tooltip" data-placement="right" title="Ke Halaman Admin">
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
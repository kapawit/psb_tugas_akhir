<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<!-- Main content -->
<section class="content container-fluid" style="background-color:white;">

    <div class="row">
        <div class="col-md-6">
            <img src="../../assets/img/halo.gif" alt="halo">
        </div>
        <div class="col-md-6">
            <div class="jumbotron jumbotron-fluid">
                <div class="container" style="margin-top:100px; margin-bottom:100px;">
                    <h2>Selamat Datang Kembali</h2>
                    <h1><?= $_SESSION['nama_siswa'] ?></h1>
                    <p>Sebelum Melanjutkan proses pendaftaran para siswa diharapkan untuk membaca panduan pendaftaran</p>
                    <a class="btn btn-lg btn-primary" href="#">Download Panduan</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->


<?php
include("template/footer.php");
?>
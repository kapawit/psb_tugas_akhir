<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<?php
include("../../database/koneksi.php");
$query_verified = mysqli_query($koneksi, "SELECT * from siswa WHERE status_daftar='Diterima'");
$query_nonverified = mysqli_query($koneksi, "SELECT * from siswa WHERE status_daftar='Pending'");
$query_daftar = mysqli_query($koneksi, "SELECT * from siswa");
$query_berita = mysqli_query($koneksi, "SELECT * from berita");
$verified = mysqli_num_rows($query_verified);
$nonverified = mysqli_num_rows($query_nonverified);
$pendaftar = mysqli_num_rows($query_daftar);
$berita = mysqli_num_rows($query_berita);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid ">
        <!-- widget -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-check"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Terverifikasi</span>
                        <span class="info-box-number"><?= $verified ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-exclamation-triangle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Belum Terverifikasi</span>
                        <span class="info-box-number"><?= $nonverified ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Pendaftar</span>
                        <span class="info-box-number"><?= $pendaftar ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-newspaper-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Berita</span>
                        <span class="info-box-number"><?= $berita ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
        <!-- widget -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include("template/footer.php");
?>
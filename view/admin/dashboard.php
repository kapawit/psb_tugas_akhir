<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-6">
                <img src="../../assets/img/halo.gif" alt="halo">
            </div>
            <div class="col-md-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container" style="margin-top:100px; margin-bottom:100px;">
                        <h2>Selamat Datang Kembali</h2>
                        <h1><?= $_SESSION['nama_admin'] ?></h1>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include("template/footer.php");
?>
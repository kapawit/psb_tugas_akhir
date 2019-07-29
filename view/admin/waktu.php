<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
        <h2>Pengaturan Waktu Pendaftaran</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="../../controller/admin/waktu.php">
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun" name="tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bulan" name="bulan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal" name="tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="btn btn-primary" value="Simpan" type="submit" name="submit">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6">
                <?php
                include("../../database/koneksi.php");
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
                    <div class="bg-primary" style="padding:20px;">
                        <h3><?php echo $diff->d; ?>Hari</h3>
                        <h3><?php echo $diff->h; ?>Jam</h3>
                        <h3><?php echo $diff->i; ?>Menit</h3>
                        <h3><?php echo $diff->s; ?>Detik</h3>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="bg-info">
                        <h3>Pendaftaran Ditutup</h3>
                    </div>
                <?php
                } ?>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("template/footer.php");
?>
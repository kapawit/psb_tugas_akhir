<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
        <h2>Berita</h2>
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="../../controller/admin/berita.php">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul">
                            <input type="hidden" value="<?= $_SESSION['nama_admin']; ?>" id="penulis" name="penulis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Isi Berita</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="isi" height="400px;" name="isi"></textarea>
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
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("template/footer.php");
?>
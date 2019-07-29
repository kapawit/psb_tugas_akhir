<?php
include("../template/header.php");
include("../template/navbar.php");
?>
<?php if ($_SESSION['role'] == 'siswa') { ?>
    <!-- start main -->
    <main role="main">
        <!-- Start Container -->
        <div class="container pt-4">
            <!-- Start Form -->
            <form action="../controller/insert.php" method="post">
                <h2 class="text-center">Formulir Pendaftaran Siswa</h2>
                <div class="container pt-2 pb-2">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jk" id="jk" class="form-control">
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telpon" class="col-sm-2 col-form-label">Nomor Telpon</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan Nomor Telpon " class="form-control" id="no_telpon" name="no_telpon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan Email " class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" placeholder="Masukkan Alamat" class="form-control" id="alamat" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asal_sekolah" class="col-sm-2 col-form-label">Sekolah Asal</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Masukkan Asal Sekolah" class="form-control" id="asal_sekolah" name="asal_sekolah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="btn btn-lg btn-primary" value="Daftar" type="submit" name="submit">
                        </div>
                    </div>
            </form>
            <!-- Finish Form -->
        </div>
        <!-- Finish container -->
    </main>
    <!-- Finish main -->
<?php
} else {
    header("location:login.php?pesan=belum_login");
} ?>
<?php
include("../template/footer.php");
?>
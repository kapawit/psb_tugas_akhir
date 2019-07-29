<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<?php if ($_SESSION['role'] == 'siswa') { ?>
    <!-- Content Header (Page header) -->
    <?php
    $id = $_SESSION['id_siswa'];
    include_once("../../database/koneksi.php");
    $query_data = mysqli_query($koneksi, "SELECT id_pendaftaran,nama_siswa,email from siswa WHERE id_pendaftaran='$id'");
    $query_form = mysqli_query($koneksi, "SELECT status_form from siswa WHERE id_pendaftaran='$id'");
    $data_siswa =  mysqli_fetch_array($query_data);
    $data_form =  mysqli_fetch_array($query_form);
    ?>
    <section class="content-header">
        <h3>Formulir Biodata Siswa</h3>
        <?php include("../feedback/feedback.php"); ?>

    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <!-- Start Container -->
        <?php if ($data_form['status_form'] !== '1') { ?>
            <!-- Start Form -->
            <form action="../../controller/siswa/formulir.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input disabled type="text" value="<?= $data_siswa['nama_siswa'] ?>" class="form-control" id="nama" name="nama">
                        <input type="hidden" name="id_siswa" value="<?= $_SESSION['id_siswa'] ?>">
                        <input type="hidden" name="status_form" value="1">
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
                            <option value="Laki-laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
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
                        <input type="text" disabled value="<?= $data_siswa['email'] ?>" class="form-control" id="email" name="email">
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
                    <label for="pas_foto" class="col-sm-2 col-form-label">Upload Pas Foto</label>
                    <div class="col-sm-4">
                        <input type="file" placeholder="Upload Dokumen" class="form-control" id="pas_foto" name="pas_foto">
                    </div>
                    <label for="akta" class="col-sm-2 col-form-label">Upload Akta Kelahiran</label>
                    <div class="col-sm-4">
                        <input type="file" placeholder="Upload Akta Kelahiran" class="form-control" id="akta" name="akta">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Upload Ijazah SMP</label>
                    <div class="col-sm-4">
                        <input type="file" placeholder="Upload Dokumen" class="form-control" id="ijazah" name="ijazah">
                    </div>
                    <label for="no_ijazah" class="col-sm-2 col-form-label">No. Ijazah</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Masukkan Nomor Ijazah" class="form-control" id="no_ijazah" name="no_ijazah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kartu_keluarga" class="col-sm-2 col-form-label">Upload Kartu Keluarga</label>
                    <div class="col-sm-4">
                        <input type="file" placeholder="Upload Kartu Keluarga" class="form-control" id="kartu_keluarga" name="kartu_keluarga">
                    </div>
                    <label for="nilai_raport" class="col-sm-2 col-form-label">Total Nilai Raport</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Masukkan Total nilai raport kelas 7 s/d 9" class="form-control" id="nilai_raport" name="nilai_raport">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="transkrip" class="col-sm-2 col-form-label">Upload Transkrip Nilai</label>
                    <div class="col-sm-4">
                        <input type="file" placeholder="Upload Transkrip NIlai" class="form-control" id="transkrip" name="transkrip">
                    </div>
                    <label for="nilai_un" class="col-sm-2 col-form-label">Nilai UN SMP</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Masukkan nilai UN" class="form-control" id="nilai_un" name="nilai_un">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalformulir">
                            Submit </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalformulir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto odit minus ullam pariatur dignissimos tenetur dicta sint! Ea, vero consectetur. Libero, itaque ex. Expedita corrupti totam cum nobis repellendus alias.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <input class="btn btn-primary" value="Simpan" type="submit" name="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Finish Form -->
            <!-- Finish container -->
        <?php
        } else { ?>
            <div class="alert alert-info">
                <h1>Formulir sudah di isi</h1>
            </div>
        <?php
        } ?>
    </section>
    <!-- /.content -->
<?php
} else {
    header("location:../home/login.php?pesan=belum_login");
} ?>

<?php
include("template/footer.php");
?>
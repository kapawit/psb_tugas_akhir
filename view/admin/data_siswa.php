<?php
include("template/header.php");
include("template/navbar.php");
include("template/sidebar.php");
?>
<!-- Content Wrapper. Contains page content -->
<?php
include("../../database/koneksi.php");
$query_data = mysqli_query($koneksi, "SELECT * from siswa ORDER BY `nilai_un` DESC");
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
        <h2>Data Siswa Pendaftar</h2>
        <table class="table table-striped table-dark" width="100%">
            <thead class="bg-info">
                <th width="5%">No</th>
                <th width="15%">Nama</th>
                <th width="10%">Tanggal Lahir</th>
                <th width="5%">Jenis Kelamin</th>
                <th width="10%">No Telpon</th>
                <th width="10%">Email</th>
                <th width="15%">Alamat</th>
                <th width="10%">Nilai Un</th>
                <th width="10%">Asal Sekolah</th>
                <th width="10%">Aksi</th>
            </thead>
            <tbody>
                <?php
                $no = 1; // untuk view data, nomor JANGAN DIAMBIL DARI DATABASE!!. 
                foreach ($query_data as $row) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_siswa']; ?></td>
                        <td><?= $row['tgl_lahir']; ?></td>
                        <td><?= $row['jk']; ?></td>
                        <td><?= $row['no_telfon']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['nilai_un']; ?></td>
                        <td><?= $row['asal_sekolah']; ?></td>
                        <td>
                            <?php if ($row['status_daftar'] == 'pending') {
                                ?>
                                <a class="btn btn-success " href="../../controller/admin/verifikasi.php?id_siswa=<?= $row['id_pendaftaran']; ?>">Verifikasi</a>
                            <?php
                            } else { ?>
                                <a class="btn btn-success" disabled href="#">Diterima</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("template/footer.php"); ?>
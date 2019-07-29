<?php
include("../template/header.php");
include("../template/navbar.php");
?>
<?php
include("../../database/koneksi.php");
$query_data = mysqli_query($koneksi, "SELECT * from siswa WHERE status_daftar='1' ORDER BY `nilai_un` DESC");
?>
<main role="main">
    <img src="../../assets/img/bg-sekolah.jpg" alt="bg sekolah" width="100%">
    <div class="container py-4">
        <h2>Data Siswa Diterima</h2>
        <table class="table table-striped" width="100%">
            <thead>
                <th width="5%">No</th>
                <th width="15%">Nama</th>
                <th width="10%">Tanggal Lahir</th>
                <th width="5%">Jenis Kelamin</th>
                <th width="10%">No Telpon</th>
                <th width="10%">Email</th>
                <th width="15%">Alamat</th>
                <th width="10%">Nilai Un</th>
                <th width="10%">Asal Sekolah</th>
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
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
<?php
include("../template/footer.php");
?>
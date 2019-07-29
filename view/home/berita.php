<?php
include("../template/header.php");
include("../template/navbar.php");
?>
<?php
include("../../database/koneksi.php");
$query_data = mysqli_query($koneksi, "SELECT * from berita ORDER BY `id_berita` DESC");
?>
<main role="main">
    <img src="../../assets/img/bg-sekolah.jpg" alt="bg sekolah" width="100%">
    <div class="container pt-4">
        <h2>Berita Terbaru</h2>
        <?php foreach ($query_data as $key => $value) { ?>
            <div class="card m-4">
                <div class="card-header">
                    <h5 class="card-title"><?= $value['judul']; ?></h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $value['isi']; ?></p>
                    <span>Ditulis oleh : <?= $value['penulis']; ?></span>
                </div>
            </div>
        <?php
        } ?>
    </div>
</main>
<?php
include("../template/footer.php");
?>
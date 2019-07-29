<?php
include("../../database/koneksi.php");
$status = 'Diterima';
$id = $_GET['id_siswa'];
$query_status = "UPDATE `siswa` SET `status_daftar`='$status' WHERE id_pendaftaran='$id'";

mysqli_query($koneksi, $query_status);
header("location:../../view/admin/data_siswa.php");

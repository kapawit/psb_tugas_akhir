<?php
include("../../database/koneksi.php");

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

$query = "INSERT INTO `berita` (`judul`, `isi`, `penulis`) VALUES ('$judul','$isi','$penulis')";

mysqli_query($koneksi, $query);

header("location:../../view/admin/dashboard.php");

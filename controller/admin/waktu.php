<?php
include("../../database/koneksi.php");

$tahun = $_POST['tahun'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];

$query = "update  waktu set tahun='$tahun',tanggal='$tanggal',bulan='$bulan' where id='1'";
mysqli_query($koneksi, $query);

header("location:../../view/admin/data_siswa.php");

<?php
include("../database/koneksi.php");
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "INSERT INTO siswa SET 
nama_siswa='$nama', 
email='$email', 
username='$email', 
pass='$pass'";

mysqli_query($koneksi, $query);
header("location:../view/home/login.php?pesan=daftar_sukses");

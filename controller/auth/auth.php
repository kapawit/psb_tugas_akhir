<?php
// mengaktifkan session php
session_start();
include("../../database/koneksi.php");

if (isset($_POST['username']) && ($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $fetch = mysqli_query($koneksi, "SELECT * FROM $role WHERE username='$username' and pass='$password'");
    $data = mysqli_fetch_array($fetch);
    $cek = mysqli_num_rows($fetch);
    if ($cek > 0) {
        if ($role == 'siswa') {
            $_SESSION['role'] = 'siswa';
            $_SESSION['nama_siswa'] = $data['nama_siswa'];
            $_SESSION['id_siswa'] = $data['id_pendaftaran'];
            header("location:../../view/siswa/dashboard.php?pesan=sukses");
        } else if ($role == 'admin') {
            $_SESSION['role'] = 'admin';
            $_SESSION['nama_admin'] = $data['nama_admin'];
            $_SESSION['id_admin'] = $data['id_admin'];
            header("location:../../index.php?pesan=sukses");
        }
    } else {
        header("location:../../view/home/login.php?pesan=gagal");
    }
} else {
    header("location:../../view/home/login.php?pesan=kosong");
}

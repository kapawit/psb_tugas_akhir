<?php
include("../../database/koneksi.php");
$id = $_POST['id_siswa'];
$status_form = $_POST['status_form'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$no_telp = $_POST['no_telpon'];
$alamat = $_POST['alamat'];
$sekolah_asal = $_POST['asal_sekolah'];
$no_ijazah = $_POST['no_ijazah'];
$nilai_raport = $_POST['nilai_raport'];
$nilai_un = $_POST['nilai_un'];

$pas_foto = $_FILES['pas_foto']['name'];
$pas_foto_tmp = $_FILES['pas_foto']['tmp_name'];

$akta = $_FILES['akta']['name'];
$akta_tmp = $_FILES['akta']['tmp_name'];

$ijazah = $_FILES['ijazah']['name'];
$ijazah_tmp = $_FILES['ijazah']['tmp_name'];

$kartu_keluarga = $_FILES['kartu_keluarga']['name'];
$kartu_keluarga_tmp = $_FILES['kartu_keluarga']['tmp_name'];

$transkrip = $_FILES['transkrip']['name'];
$transkrip_tmp = $_FILES['transkrip']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "file/";

// pindahkan file
move_uploaded_file($pas_foto_tmp, $dirUpload . $pas_foto);
move_uploaded_file($akta_tmp, $dirUpload . $akta);
move_uploaded_file($ijazah_tmp, $dirUpload . $ijazah);
move_uploaded_file($kartu_keluarga_tmp, $dirUpload . $kartu_keluarga);
move_uploaded_file($transkrip_tmp, $dirUpload . $transkrip);

$query_update = "UPDATE `siswa` SET `tgl_lahir`='$tgl_lahir',`jk`='$jk',`no_telfon`='$no_telp',`alamat`='$alamat',`asal_sekolah`='$sekolah_asal',`no_ijazah`='$no_ijazah',`nilai_raport`='$nilai_raport',`file_pas_foto`='$pas_foto',`file_akta_kelahiran`='$akta',`file_ijazah`='$ijazah',`file_kartu_keluarga`='$kartu_keluarga',`file_transkrip`='$transkrip',`nilai_un`='$nilai_un',`status_form`='$status_form' WHERE id_pendaftaran=$id";

// var_dump($query_update);
// die();

mysqli_query($koneksi, $query_update);
header("location:../../view/siswa/dahsboard.php?pesan=update_sukses");

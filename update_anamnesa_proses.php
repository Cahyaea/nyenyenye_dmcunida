<?php
// koneksi database
if(isset($_POST['update'])){
include_once('koneksi.php');

 
// menangkap data yang di kirim dari form

$id_pasien = $_POST['id_pasien'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$suhu = $_POST['suhu'];
$detak_jantung = $_POST['detak_jantung'];
$tensi_darah = $_POST['tensi_darah'];
$riwayat_penyakit = $_POST['riwayat_penyakit'];
$keluhan = $_POST['keluhan'];

 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE anamnese set berat='$berat', tinggi='$tinggi', suhu='$suhu', detak_jantung='$detak_jantung', tensi_darah='$tensi_darah', riwayat_penyakit='$riwayat_penyakit', keluhan='$keluhan' WHERE id='$id_pasien'";


// update data ke database
mysqli_query($connect, $query_update);
// echo $id_pasien;
// echo $berat;
 

header("location:buat_dsb.php");
}
?>
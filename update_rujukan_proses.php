<?php
// koneksi database
include_once('koneksi.php');

 
// menangkap data yang di kirim dari form

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggalperiksa = $_POST['tanggalperiksa'];
$tanggalpulang = $_POST['tanggalpulang'];
$status = $_POST['status'];

 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE rujukan set nama='$nama', tanggalperiksa='$tanggalperiksa', tanggalpulang='$tanggalpulang', status='$status', id='$id' where id='$id'";


// update data ke database
mysqli_query($connect, $query_update);
 

header("location:buat_dsb.php");
 
?>
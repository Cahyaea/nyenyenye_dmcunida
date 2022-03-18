<?php
// koneksi database
include_once('koneksi.php');
 
// menangkap data yang di kirim dari form
$nama_kategori = $_POST['nama_kategori'];
$id = $_POST['id'];
 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE kategori set nama_kategori='$nama_kategori', id='$id' where id='$id'";


// update data ke database
mysqli_query($connect, $query_update);
 

header("location:list.php");
 
?>
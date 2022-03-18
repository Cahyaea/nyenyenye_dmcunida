<?php
// koneksi database
if(isset($_POST['update'])){
include_once('koneksi.php');

 
// menangkap data yang di kirim dari form

$id = $_POST['id_pasien'];
$tindakan = $_POST['m_icd9'];
$rujuk = $_POST['rujukan'];

 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE tindakan SET code_icd9='$tindakan', rujukan='$rujuk' WHERE id ='$id'";


// update data ke database
mysqli_query($connect, $query_update);
 

header("location:buat_dsb.php");
}
?>
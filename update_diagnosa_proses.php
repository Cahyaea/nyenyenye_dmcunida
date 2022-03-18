<?php
// koneksi database
if(isset($_POST['update'])){
include_once('koneksi.php');

 
// menangkap data yang di kirim dari form

$id = $_POST['id_pasien'];
$diagnosa = $_POST['m_icd10'];

 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE diagnosa_pasien set code_icd10='$diagnosa' WHERE id='$id'";


// update data ke database
mysqli_query($connect, $query_update);
 

header("location:buat_dsb.php");
}
?>
<?php
// koneksi database
if(isset($_POST['update'])){
include_once('koneksi.php');

 
// menangkap data yang di kirim dari form

$id_pasien = $_POST['id_pasien'];
$fullname = $_POST['fullname'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$nim = $_POST['nim'];
$born = $_POST['born'];
$faculty = $_POST['faculty'];
$studyprogram = $_POST['studyprogram'];
$grade = $_POST['grade'];
$hostelrayon = $_POST['hostelrayon'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

 
// $query_update = "UPDATE kategori SET nama_kategori='$nama_kategori' where id='$id'";
$query_update = "UPDATE data_pasien SET fullname='$fullname', nickname='$nickname', gender='$gender', nim='$nim', born='$born', faculty='$faculty', studyprogram='$studyprogram', grade='$grade', hostelrayon='$hostelrayon', email='$email', phonenumber='$phonenumber' WHERE id_pasien='$id_pasien'";


// update data ke database
mysqli_query($connect, $query_update);
 

header("location:buat_dsb.php");
}
?>
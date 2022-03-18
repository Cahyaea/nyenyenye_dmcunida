<?php 
    include_once('koneksi.php');
    $id = $_GET['id'];
    
    mysqli_query($connect, "DELETE FROM data_pasien WHERE id='$id'");
    
    header("location:buat_dsb.php");
?>

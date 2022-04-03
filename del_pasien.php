<?php 
    include_once('koneksi.php');
    $id_pasien = $_GET['id'];
    echo $id_pasien;
    
    mysqli_query($connect, "DELETE FROM data_pasien WHERE id_pasien='$id_pasien'");
    mysqli_query($connect, "DELETE FROM anamnese WHERE id='$id_pasien'");
    mysqli_query($connect, "DELETE FROM registrasi WHERE id='$id_pasien'");
    mysqli_query($connect, "DELETE FROM diagnosa_pasien WHERE id='$id_pasien'");
    mysqli_query($connect, "DELETE FROM tindakan WHERE id='$id_pasien'");

    // mysqli_query($connect, "DELETE FROM data_pasien WHERE id_pasien='$id_pasien'");
    
    header("location:buat_dsb.php");
?>

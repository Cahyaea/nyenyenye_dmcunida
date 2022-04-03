<?php 
    include_once('koneksi.php');
    $id_pasien = $_GET['id'];
    mysqli_query($connect, "DELETE FROM data_pasien as d, anamnese as a, registrasi as r,diagnosa_pasien as g, tindakan as t WHERE id_pasien='$id_pasien' AND d.id_pasien=r.no_rm AND a.id=r.id_anamnese AND r.id=g.registrasi_id AND t.registrasi_id=r.id");
    
    header("location:buat_dsb.php");
?>

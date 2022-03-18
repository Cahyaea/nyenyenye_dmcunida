<?php 
    include_once('koneksi.php');
    $id = $_GET['id'];
    
    mysqli_query($connect, "DELETE FROM kategori WHERE id='$id'");
    
    header("location:list.php");
?>

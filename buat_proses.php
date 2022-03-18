<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

        $nama_kategori = $_POST['nama_kategori'];

        $simpan = mysqli_query($connect, "INSERT INTO kategori VALUES (NULL, '$nama_kategori')");
          
            if($simpan==true){
    
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:list.php");
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{  
 
    }
?>
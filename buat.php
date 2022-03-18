<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

        $data_pasien = $_POST['data_pasien'];

        $simpan = mysqli_query($connect, "INSERT INTO kategori VALUES (NULL, '$data_pasien')");
          
            if($simpan==true){
    
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:list.php");
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{  
 
    }
?>
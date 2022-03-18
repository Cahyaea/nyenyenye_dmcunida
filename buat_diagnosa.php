<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

        $diagnos = $_POST['diagnosa'];

        $simpan = mysqli_query($connect, "INSERT INTO diagnosa_pasien VALUES (NULL, '$diagnosa')");
          
            if($simpan==true){
    
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:list.php");
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{  
 
    }
?>
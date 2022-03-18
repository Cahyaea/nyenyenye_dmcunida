<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

        $rujukan = $_POST['rujukan'];

        $simpan = mysqli_query($connect, "INSERT INTO rujukan VALUES (NULL, '$rujukan')");
          
            if($simpan==true){
    
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:list.php");
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{  
 
    }
?>
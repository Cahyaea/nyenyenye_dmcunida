<?php

    if(isset($_POST['tambah_user'])){
        include_once('koneksi.php');
        $nama_user = $_POST['nama_user'];
        $username = $_POST['username'];
        $kategori_user = $_POST['kategori_user'];
        $password = $_POST['password'];
        

        $simpan = mysqli_query($connect, "INSERT INTO user (nama,username,kategori_user,password) VALUES('$nama_user','$username', '$kategori_user', '$password')");
          
         

            if($simpan==true){
		
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:list_user.php");
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{	
 
    }
?>

<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');
        
        // mengambil data barang dengan kode paling besar
        $query = mysqli_query($connect, "SELECT max(id_pasien) as kodeTerbesar FROM data_pasien");
        $data = mysqli_fetch_array($query);
        $kodePasien = $data['kodeTerbesar'];
        
        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
        $kodePasien++;
        
        // membentuk kode barang baru
        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
       
        $kodePasien = sprintf("%05s", $kodePasien);
        $idRegistrasi = $kodePasien;
        $idAnamnese = $kodePasien;
        $idDiagnosa = $kodePasien;
        $idTindakan = $kodePasien;


        
        // $id_pasien = $_POST['id_pasien'];
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
        


        $simpan = mysqli_query($connect, "INSERT INTO data_pasien VALUES ('$kodePasien', '$fullname','$nickname','$gender','$nim', '$born', '$faculty','$studyprogram','$grade','$hostelrayon','$email', '$phonenumber')");

        $simpan2 = mysqli_query($connect, "INSERT INTO registrasi VALUES ('$idRegistrasi', '$kodePasien', '$idAnamnese', NULL, NULL)");

        $simpan3 = mysqli_query($connect, "INSERT INTO anamnese VALUES ('$idAnamnese', NULL, NULL, NULL, NULL, NULL, NULL, NULL)");

        $simpan4 = mysqli_query($connect, "INSERT INTO diagnosa_pasien VALUES ('$idDiagnosa', '$idRegistrasi', NULL)");

        $simpan5 = mysqli_query($connect, "INSERT INTO tindakan VALUES ('$idTindakan', '$idRegistrasi', NULL, NULL)");
          
        
            if($simpan==true){
    
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                header("location:buat_dsb.php");
            }else{
                
                echo "<script>alert('Astaghfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{  
 
    }
?>
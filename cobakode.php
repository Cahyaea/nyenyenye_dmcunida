<?php

   include 'koneksi.php';
        
        
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

        echo $kodePasien;
        echo gettype($kodePasien);
?>
<?php
include "koneksi.php";//memasukkan koneksi
$nama_user=$_POST['nama_user'];
$password=$_POST['password'];
// pastikan username dan password adalah berupa huruf atau angka.
if (ctype_alnum($nama_user) OR ctype_alnum($password)){

    $login=mysqli_query($connect,"SELECT * FROM user WHERE username='$nama_user' AND password='$password'");

	$ketemu=mysqli_num_rows($login);
	if($ketemu>0){	
		$r=mysqli_fetch_array($login);
		session_start();
		$_SESSION['nama_user']=$r['username'];
		$_SESSION['password']=$r['password'];		
		$_SESSION['kategori_user']=$r['kategori_user'];		
		// echo "user : ".$_SESSION['nama_user']."<br> pass :".$_SESSION['password']."";
		// exit();
		header('location:admin.php');
	}else{
		echo "<center>user dan password salah silahkan ulangi <br>";
		echo "<a href=login.php><b>LOGIN</b></a></center>";
	}
}
else{
	header('location:login.php?nama_user='.$nama_user.'password='.$password.'');
}
?>
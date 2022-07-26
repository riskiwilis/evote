<?php
include_once "../../config/kon.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM tb_akun WHERE (username='$user' OR  email='$user') AND password='$pass' ";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$dt=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['id_akun'] 		= $dt['id_akun'];
	$_SESSION['user_kandidat']	= $dt['username'];
	
	/*if($b['foto']==""){
		$_SESSION['fotoskasis'] = "0.jpg";
	}else{
		$_SESSION['fotoskasis'] = $b['foto'];
	}*/
	//$idkelas=$b['idkelas'];
	//$sql2 = "SELECT * FROM kelas WHERE idkelas='$idkelas'";
	//$aksi=mysqli_query($koneksi,$sql2);
	//$c=mysqli_fetch_array($aksi);
	//$_SESSION['kelasskasis'] 	= $c['kelas'];
	header('location: ../index_kandidat.php');
}else{
	echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");window.history.back();</script>";
}

?>

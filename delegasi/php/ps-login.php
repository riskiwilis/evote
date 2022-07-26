<?php
include_once "../../config/kon.php";

$user = $_POST['username'];
//$pass = md5($_POST['password']);
$pass = $_POST['password'];

$sql = "SELECT * FROM tb_delegasi WHERE nim='$user' AND password='$pass' ";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$dt=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['id_delegasi'] 	= $dt['id_delegasi'];
	$_SESSION['user_delegasi']	= $dt['nim'];
	$_SESSION['nama_delegasi']	= $dt['nama_delegasi'];
	
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
	header('location: ../index_delegasi.php');
}else{
	echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");window.history.back()</script>";
}

?>

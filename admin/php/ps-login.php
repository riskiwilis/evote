<?php
//include('../../config/koneksi.php');
IF(ISSET($_POST['login'])){

include_once "../../config/kon.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
//$pass = $_POST['password'];


$sql = "SELECT * FROM tb_admin WHERE username='$user' AND password='$pass' ";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$dt=mysqli_fetch_array($login);

if($ketemu>0){
	echo "<script language=\"javascript\">alert(\"Selamat datang Admin Evote HIMATIF !!!\");</script>";
	session_start();
	$_SESSION['nama_admin'] 	= $dt['nama'];
	$_SESSION['user_admin']		= $dt['username'];	
	header('location: ../index_admin.php?page=home');
}else{
	echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");document.location.href='../index.php';</script>";
}

}
?>

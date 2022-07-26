<?php
if(isset($_POST['tambah'])){
	
	//include('../../../config/koneksi.php');
	include('../../../config/kon.php');

	$id				= $_POST['id'];
	$nama			= $_POST['nama'];	
	$username		= $_POST['username'];
	$ps 			= $_POST['ps'];	
	$pass 			= md5($_POST['pass']);
	//$pass 			= $_POST['pass'];
	$pass1			= $_POST['pass1'];
	$pass2			= $_POST['pass2'];


if ($pass==$ps){
	if($pass1==$pass2){
		$pass1=md5($_POST['pass1']); 
		$sql = "UPDATE tb_admin SET nama='$nama', username='$username', password='$pass1' WHERE id_admin='$id' ";
		$update = mysqli_query($koneksi,$sql);	
		if($update){
		echo "<script>alert('Data Berhasi Disimpan !');window.location='../../index_admin.php?page=dt_admin';</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan !');window.location='../../index_admin.php?page=dt_admin';</script>";	
	}

	}else{
		echo "<script>alert('Password baru dan passsword confirm tidak sama !');window.history.back()</script>";
	}
}else{
		echo "<script>alert('Password lama tidak tidak sesuai !');window.history.back()</script>";
}	

}else{	

	echo '<script>window.history.back()</script>';

}
?>
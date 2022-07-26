<?php
include ('../../config/kon.php');

if(isset($_POST['reset'])){
$sql = "DELETE FROM tb_akun ";
$del = mysqli_query($koneksi,$sql);

	if($del){
			echo "<script>alert('Berhasil Mereset Semua Sistem !');window.location='../index_admin.php';</script>";
		}else{
			echo "<script>alert('Gagal Mereset Sistem !');window.history.back()</script>";	
		}

}else{	
	echo "<script>window.history.back()</script>";

}

?>

<?php
if(isset($_GET['id'])){
	
	include('../../../config/kon.php');
	
	$id = $_GET['id'];
	
	$sql = "SELECT id_syarat FROM tb_syarat WHERE id_syarat='$id' ";
	$cek = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{		
		$sql1 = "DELETE FROM id_syarat WHERE id_syarat='$id' ";
		$del = mysqli_query($koneksi, $sql1);
		if($del){
			echo "<script>alert('Data Berhasi Dihapus !');window.location='../../index_admin.php?page=syarat';</script>";
		}else{
			echo "<script>alert('Gagal Mengahapus Data !');window.location='../../index_admin.php?page=syarat';</script>";		
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>
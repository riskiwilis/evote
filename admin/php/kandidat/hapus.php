<?php
if(isset($_GET['id'])){
	
	include('../../../config/kon.php');
	
	$id = $_GET['id'];
	$nim = $_GET['nim']; 
	$sql = "SELECT id_kandidat FROM tb_kandidat WHERE id_kandidat='$id' ";
	$cek = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{		
		$sql1 = "DELETE FROM tb_kandidat WHERE id_kandidat='$id' ";
		$del = mysqli_query($koneksi, $sql1);
		$sql2 = "DELETE FROM tb_biodata WHERE nim='$nim' ";
		$del2 = mysqli_query($koneksi, $sql2);
		if($del&&$del2){
			echo "<script>alert('Data Berhasi Dihapus !');window.location='../../index_admin.php?page=dt_kandidat';</script>";
		}else{
			echo "<script>alert('Gagal Mengahapus Data !');window.location='../../index_admin.php?page=dt_kandidat';</script>";		
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>
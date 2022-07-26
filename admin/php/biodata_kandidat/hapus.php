<?php
if(isset($_GET['id'])){
	
	//include('../../config/koneksi.php');
	include('../../../config/kon.php');
	
	$id = $_GET['id'];
	
	$sql = "SELECT id_biodata FROM tb_biodata WHERE id_biodata='$id' ";
	$cek = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$sql1 = "DELETE FROM tb_biodata WHERE id_biodata='$id' ";
		$del = mysqli_query($koneksi, $sql1);
		if($del){
			echo "<script>alert('Data Berhasi Dihapus !');window.location='../../index_admin.php?page=dt_akun_kandidat';</script>";
		}else{
			echo "<script>alert('Gagal Mengahapus Data !');window.location='../../index_admin.php?page=dt_akun_kandidat';</script>";		
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>
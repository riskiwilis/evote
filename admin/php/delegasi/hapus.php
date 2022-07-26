<?php
if(isset($_GET['id'])){
	
	//include('../../config/koneksi.php');
	include('../../../config/kon.php');
	
	$id = $_GET['id'];
	
	//$cek = mysql_query("SELECT id_delegasi FROM tb_delegasi WHERE id_delegasi='$id'") or die(mysql_error());
	$sql = "SELECT id_delegasi FROM tb_delegasi WHERE id_delegasi='$id' ";
	$cek = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//$del = mysql_query("DELETE FROM tb_delegasi WHERE id_delegasi='$id'");
		$sql1 = "DELETE FROM tb_delegasi WHERE id_delegasi='$id' ";
		$del = mysqli_query($koneksi, $sql1);
		if($del){
			echo "<script>alert('Data Berhasi Dihapus !');window.location='../../index_admin.php?page=dt_delegasi';</script>";
		}else{
			echo "<script>alert('Gagal Mengahapus Data !');window.location='../../index_admin.php?page=dt_delegasi';</script>";		
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>
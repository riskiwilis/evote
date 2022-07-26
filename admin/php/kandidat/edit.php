<?php

if(isset($_POST['tambah'])){
	
	//include('../../../config/koneksi.php');
	include('../../../config/kon.php');

	$id				= $_POST['id'];
	$nama_kandidat	= $_POST['nama_kandidat'];	
	$nim			= $_POST['nim'];	
	$jml_suara		= $_POST['jml_suara'];
//	$lokasi 		=$_FILES['foto']['tmp_name'];
//	$namafile		=$_FILES['foto']['name'];
//	$tipefile		=$_FILES['foto']['type'];

	$sql = "UPDATE tb_kandidat SET nim='$nim', nama_kandidat='$nama_kandidat', jml_suara='$jml_suara' WHERE id_kandidat='$id' ";
	$update = mysqli_query($koneksi,$sql);

if($update){
		echo "<script>alert('Data Berhasi Disimpan !');window.location='../../index_admin.php?page=dt_kandidat';</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan !');window.location='../../index_admin.php?page=dt_kandidat';</script>";	
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>
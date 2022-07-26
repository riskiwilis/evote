<?php
include ('../../config/kon.php');

if(isset($_POST['reset'])){

$sql = "UPDATE tb_kandidat SET jml_suara=0 ";
$update = mysqli_query($koneksi,$sql);

$sql1 = "DELETE FROM tb_pemilihan ";
$del = mysqli_query($koneksi,$sql1);

$status = "Belum Memilih";
$sql2 = "UPDATE tb_delegasi SET status='$status' ";
$update1 = mysqli_query($koneksi,$sql2);

	if($update&&$del&&$update1){
			echo "<script>alert('Sistem Pemilihan Berhasil Di Reset !');window.location='../index_admin.php';</script>";
		}else{
			echo "<script>alert('Gagal Mereset Sistem Pemilihan !');window.history.back()</script>";	
		}

}else{	
	echo "<script>window.history.back()</script>";

}

?>

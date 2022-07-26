<?php

function acakangkahuruf($panjang){
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter[$pos];
    }
    return $string;
}

$password = acakangkahuruf(7);

if(isset($_POST['tambah'])){
	
	//include('../../config/koneksi.php');
	include('../../../config/kon.php');
	
	$nama_delegasi 	= addslashes(strip_tags ($_POST['nama_delegasi'])); 
	$nim 			= addslashes(strip_tags ($_POST['nim'])); 
	$angkatan 		= addslashes(strip_tags ($_POST['angkatan'])); 
	if ($nama_delegasi&&$nim&&$angkatan) {

	//$input = mysql_query("INSERT INTO tb_delegasi VALUES(NULL, '$nama_delegasi', '$nim', '$password', '$angkatan')") or die(mysql_error());
	$sql = "INSERT INTO tb_delegasi SET id_delegasi='', nama_delegasi='$nama_delegasi', nim='$nim', password='$password', angkatan='$angkatan' ";
	$simpan=mysqli_query($koneksi,$sql);

		if($simpan){
				echo "<script>alert('Data Berhasi Ditambahkan !');window.location='../../index_admin.php?page=dt_delegasi';</script>";
			}else{
				echo "<script>alert('Data Gagal Ditambahkan !');window.location='../../index_admin.php?page=dt_delegasi';</script>";	
			}

	}else{
		echo "<script>alert('Tolong Penuhi Form Terlebih Dahulu !');window.history.back()</script>";
	}		

}else{	
	echo '<script>window.history.back()</script>';

}
?>
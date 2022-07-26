<?php
function acakangkahuruf($panjang)
{
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
	
	//include('../../../config/koneksi.php');
	include('../../../config/kon.php');

	$id				= addslashes(strip_tags($_POST['id']));
	$nama_delegasi	= addslashes(strip_tags($_POST['nama_delegasi']));	
	$nim			= addslashes(strip_tags($_POST['nim']));	
	$angkatan		= addslashes(strip_tags($_POST['angkatan']));
	$pass			= addslashes(strip_tags($_POST['pass']));

if($id&&$nama_delegasi&&$nim&&$angkatan){		
	if(empty($pass)){
		$sql = "UPDATE tb_delegasi SET nama_delegasi='$nama_delegasi', nim='$nim', password='$password', angkatan='$angkatan' WHERE id_delegasi='$id' ";
		$update = mysqli_query($koneksi,$sql);

	}else{
		$sql = "UPDATE tb_delegasi SET nama_delegasi='$nama_delegasi', nim='$nim', password='$pass', angkatan='$angkatan' WHERE id_delegasi='$id' ";
		$update = mysqli_query($koneksi,$sql);
	}

	
	if($update){
			echo "<script>alert('Data Berhasi Disimpan !');window.location='../../index_admin.php?page=dt_delegasi';</script>";
		}else{
			echo "<script>alert('Data Gagal Disimpan !');window.history.back()</script>";	
		}
}else{
	echo "<script>alert('Ada Form Yang kosong, Silahkan Lengkapi Terlebih Dahulu !');window.history.back()</script>";
}

}else{	

	echo '<script>window.history.back()</script>';

}

?>
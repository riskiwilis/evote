<?php
include ('../../config/kon.php');
//if(isset($_POST['simpan'])){
include ('cek-akses.php');

	$status	 ="Sudah Memilih";
	$a 		 =$_SESSION['id_delegasi'];
	$kandidat=$_GET['id'];
	$sql="INSERT INTO tb_pemilihan SET id_kandidat='$kandidat', id_pemilih='$a' ";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		
		$edit="UPDATE tb_kandidat SET jml_suara=jml_suara+1 WHERE id_kandidat='$kandidat'";
		$update=mysqli_query($koneksi,$edit);
		$edit2="UPDATE tb_delegasi SET status='$status' WHERE id_delegasi='$a' ";
		$update2=mysqli_query($koneksi,$edit2);
		header('Location:../index_delegasi.php');
		//echo "berhasil";
	}else{
		echo "<script language=\"javascript\">alert(\"Error : Terjadi kesalahan !!!\");window.history.back()</script>";
	}
/*}else{
	echo '<script>window.history.back()</script>';
}*/


?>
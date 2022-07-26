 <?php

if(isset($_POST['tambah'])){	
	//include('../../config/koneksi.php');
	include('../../config/kon.php');
	include ('cek-akses.php');
	$nama_calon		= $_POST['nama_calon'];	
	$nim			= $_POST['nim'];	
	$ipk			= $_POST['ipk'];
	$visi			= $_POST['visi'];
	$misi			= $_POST['misi'];
	$id 			= $_POST['id'];

	//gambar
	$file 		= $_FILES['gambar']['tmp_name'];
	$gambar 	= $_FILES['gambar']['name'];
	$direktori	= "../../foto/$gambar";
	move_uploaded_file($file, $direktori);
if (($ipk>= 1)&&($ipk<=4)) {
	if(empty($gambar)){
			$sql = "UPDATE tb_biodata SET nama_calon='$nama_calon', nim='$nim', ipk='$ipk', visi='$visi', misi='$misi' WHERE id_biodata='$id' ";
			$query = mysqli_query($koneksi, $sql);	
			
			echo "<script>alert('Data Berhasi Ditambahkan !');window.location='../index_kandidat.php'</script>";
		}else{
			$sql = "UPDATE tb_biodata SET nama_calon='$nama_calon', nim='$nim', ipk='$ipk', visi='$visi', misi='$misi', foto='$gambar' WHERE id_biodata='$id' ";

			$sql1 = "UPDATE tb_kandidat SET foto='$gambar' WHERE nim='$nim' ";
			$query = mysqli_query($koneksi, $sql);	
			$query1 = mysqli_query($koneksi, $sql1);
			if($query&&$query1){
				echo "<script>alert('Data Berhasi Ditambahkan !');window.location='../index_kandidat.php'</script>";
					}else{
				echo "<script>alert('Data Gagal Ditambahkan !');window.history.back()</script>";
				}
		}	

}else{	
	echo "<script>alert('Inputkan Nilai IPK Dengan Benar !');window.history.back()</script>";
}

}else{	
	echo '<script>window.history.back()</script>';

}
	
?>



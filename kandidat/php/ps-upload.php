<?php 
if(isset($_POST['tambah'])){
	include('../../config/kon.php');
	
//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
	$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	$bytes = max($bytes, 0); 
	$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	$pow = min($pow, count($units) - 1); 

	$bytes /= pow(1024, $pow); 

	return round($bytes, $precision) . ' ' . $units[$pow]; 
}

for ($i=0; $i <  count($_FILES['file']['name']); $i++) 
	{ 
	//file
	$allowed_ext	= array('doc', 'docx', 'pdf', 'zip', 'rar');
	$file_name		= $_FILES['file']['name'][$i];
	$file_ext		= strtolower(end(explode('.', $file_name)));
	$file_size		= $_FILES['file']['size'][$i];
	$file_tmp		= $_FILES['file']['tmp_name'][$i];
	//$nama 			= $_POST['nama'];
 
	$tgl			= date("Y-m-d");
	$nim 			= $_POST['nim'];
	$id_biodata		= $_POST['id_biodata'];


	if(in_array($file_ext, $allowed_ext) === true){
		if($file_size < 1044070){
			$lokasi = '../../file/'.$file_name;
			move_uploaded_file($file_tmp, $lokasi);
			$sql2 = "INSERT INTO tb_syarat SET id_biodata='$id_biodata', tgl_upload='$tgl', file='$file_name', ukuran_file='$file_size', nim='$nim' ";
			$query2 = mysqli_query($koneksi,$sql2); 

			if($query2){
				echo "<script>alert('Data Berhasil Ditambahkan !');window.location='../index_kandidat.php'</script>";
			}else{
				echo "<script>alert('Data Gagal Ditambahkan !');window.history.back()</script>";	
			}

		}else{
			echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 1 Mb!')window.history.back()</div>";
		}
	}else{
		echo "<script>alert('ERROR: File Extensi Tidak Di izinkan !');window.history.back()</script>";
	}

}

}else{	
	echo '<script>window.history.back()</script>';
}
	
?>

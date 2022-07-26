 <?php
if(isset($_POST['tambah'])){
	
	//include('../../config/koneksi.php');
	include('../../config/kon.php');
	include ('cek-akses.php');

	//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
	$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	$bytes = max($bytes, 0); 
	$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	$pow = min($pow, count($units) - 1); 

	$bytes /= pow(1024, $pow); 

	return round($bytes, $precision) . ' ' . $units[$pow]; 
}
 
	$tgl			= date("Y-m-d");
	$nama_calon		= addslashes(strip_tags($_POST['nama_calon']));	
	$nim			= addslashes(strip_tags($_POST['nim']));	
	$ipk			= addslashes(strip_tags($_POST['ipk']));
	$visi			= addslashes(strip_tags($_POST['visi']));
	$misi			= addslashes(strip_tags($_POST['misi']));
	$id_akun		= $_SESSION['id_akun'];

	//gambar
	$allowed_ext	= array('jpeg','jpg','png','gif');
	$file 			= $_FILES['gambar']['tmp_name'];
	$gambar 		= $_FILES['gambar']['name'];
	$file_ext		= strtolower(end(explode('.', $gambar)));
	$file_size		= $_FILES['gambar']['size'];

if ($nama_calon&&$nim&&$ipk&&$visi&&$misi) {
	if(in_array($file_ext, $allowed_ext) === true){
		if($file_size < 1044070){

			if (($ipk>= 1)&&($ipk<=4)) {
				$direktori		= "../../foto/$gambar";
				move_uploaded_file($file, $direktori);
				$sql = "INSERT INTO tb_biodata SET id_biodata='', id_akun='$id_akun', nama_calon='$nama_calon', nim='$nim', ipk='$ipk', visi='$visi', misi='$misi', foto='$gambar' ";
					$query = mysqli_query($koneksi, $sql);
					
					$sql1 = "INSERT INTO tb_kandidat SET id_kandidat='', foto='$gambar', nim='$nim', nama_kandidat='$nama_calon', jml_suara=0 ";
					$query1 = mysqli_query($koneksi,$sql1); 
				
					if($query&&$query1){
						echo "<script>alert('Data Berhasi Ditambahkan !');window.location='../index_kandidat.php'</script>";
					}else{
						echo "<script>alert('Data Gagal Ditambahkan !');window.history.back()</script>";	
					}

			}else{
				echo "<script>alert('Inputkan Nilai IPK Dengan Benar  !');window.history.back()</script>";
			}
	
		}else{
			echo "<script>alert('ERROR: Besar ukuran file (file size) maksimal 1 Mb!')window.history.back()</div>";
		}

	}else{
		echo "<script>alert('ERROR: File Extensi Tidak Di izinkan !');window.history.back()</script>";
	}		

}else{
	echo "<script>alert('Lengkapi Form Pendaftaran !');window.history.back()</script>";
}

}else{	
	echo '<script>window.history.back()</script>';

}
	
?>



<?php	
//include('../../config/koneksi.php');
include('../../../config/kon.php');
if(isset($_POST['tambah'])){


$nama 		= addslashes(strip_tags ($_POST['nama'])); 
$username 	= addslashes(strip_tags ($_POST['username'])); 
$password 	= addslashes(strip_tags ($_POST['password'])); 
$password2 	= addslashes(strip_tags ($_POST['password2'])); 
 
if ($username&&$password&&$password2) { 
	//berfunsgi untuk mengecek form tidak boleh lebih dari 10 char 
 	if (strlen($username) > 10){
 		echo "<script>alert('username tidak boleh lebih dari 10 karakter!');window.history.back()</script>";
	}else {
	    
	    //password harus 6-25 karakter
	    if (strlen($password) > 25 || strlen($password2) < 6){
	 		echo "<script>alert('password harus 6-25 karakter!');window.history.back()</script>";
    	}else {
    	//untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $password2){
            $sql = "SELECT * FROM tb_admin WHERE username = '$username' ";
            $query = mysqli_query($koneksi,$sql);
            $cek = mysqli_num_rows($query);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($cek == 0) {
                $password = md5($password);
	 			$sql1 = "INSERT INTO tb_admin SET id_admin='', nama='$nama', username='$username', password='$password' ";
	 			$query1 = mysqli_query($koneksi,$sql1); 
	 			
	 			echo "<script>alert('Pendaftaran berhasil');window.location='../../index_admin.php?page=dt_admin';</script>";
            }else {
	 			echo "<script>alert('Username sudah terdaftar');window.history.back()</script>";
            }

        }else {
	 		echo "<script>alert('Password yang kamu masukan tidak sama!');window.history.back()</script>";
        	}
        }

    }

}else {
	echo "<script>alert('Tolong penuhi form pendaftaran!');window.history.back()</script>";
}

}else{
	echo '<script>window.history.back()</script>';
}
?>




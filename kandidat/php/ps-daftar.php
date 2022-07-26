<?php	
//include('../../config/koneksi.php');
include('../../config/kon.php');

$username 	= addslashes(strip_tags ($_POST['username'])); 
$password 	= addslashes(strip_tags ($_POST['password'])); 
$password2 	= addslashes(strip_tags ($_POST['password2'])); 
$email 		= addslashes(strip_tags ($_POST['email'])); 
 
if ($username&&$password&&$password2) { 
	//berfunsgi untuk mengecek form tidak boleh lebih dari 10 
 	if (strlen($username) > 10){
 		echo "<script>alert('username tidak boleh lebih dari 10 karakter!');window.location='../daftar.php';</script>";
	}else {
	    
	    //password harus 6-25 karakter4
	    if (strlen($password) > 25 || strlen($password2) < 6){
	 		echo "<script>alert('password harus 6-25 karakter!');window.history.back()</script>";
    	}else {
    	//untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($password == $password2){
            $sql = "SELECT * FROM tb_akun WHERE username = '$username' ";
            $query = mysqli_query($koneksi,$sql);
            $cek = mysqli_num_rows($query);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($cek == 0) {
                $password = md5($password);
	 			$sql1 = "INSERT INTO tb_akun SET id_akun='', username='$username', password='$password', email='$email' ";
	 			$query1 = mysqli_query($koneksi,$sql1); 
	 			
	 			echo "<script>alert('Pendaftaran berhasil');window.location='../index.php';</script>";
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

?>




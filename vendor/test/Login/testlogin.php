<?php
class testlogin{
	public function login(){
		include "../kon.php";
		$user = "admin";
 		$pass = md5('admin');
 
		$sql = "SELECT * FROM tb_admin WHERE username='$user' AND password='$pass' ";
		$login=mysqli_query($koneksi, $sql);
		$cek=mysqli_num_rows($login);

 	if($cek > 0){
  			$nilai = "berhasil";
	}else{	  	
	  	$nilai = "gagal";
	 	}
	 	return $nilai;
	}
}



?>

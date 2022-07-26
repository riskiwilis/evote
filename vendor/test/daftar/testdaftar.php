<?php
class testdaftar{
	public function daftar(){
		
		include "koneksi.php";
		
		$username 	= addslashes(strip_tags ($_POST['username'])); 
		$password 	= addslashes(strip_tags ($_POST['password'])); 
		$password2 	= addslashes(strip_tags ($_POST['password2'])); 
		$email 		= addslashes(strip_tags ($_POST['email'])); 
		 
		if ($username&&$password&&$password2) { 
			//berfunsgi untuk mengecek form tidak boleh lebih dari 10 
		 	if (strlen($username) > 10){
		 		echo "<script>alert('username tidak boleh lebih dari 10 karakter!');window.location='../daftar.php';</script>";
			}else {
			    
			    //password harus 6-25 karakter
			    if (strlen($password) > 25 || strlen($password2) < 6){
			 		echo "<script>alert('password harus 6-25 karakter!');window.location='../daftar.php';</script>";
		    	}else {
		    	//untuk mengecek apakah form password dan form konfirmasi password sudah sama
		        if ($password == $password2){
		            $sql_get = mysql_query ("SELECT * FROM tb_akun WHERE username = '$username' ");
		            $num_row = mysql_num_rows($sql_get);
		        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
		            if ($num_row == 0) {
		                $password = md5($password);
		                $sql_insert = mysql_query("INSERT INTO tb_akun VALUES (NULL,'$username','$password','$email')");
			 			echo "<script>alert('Pendaftaran berhasil');window.location='../halaman_login.php';</script>";
		            }else {
			 			echo "<script>alert('Username sudah terdaftar');window.location='../daftar.php';</script>";
		            }

		        }else {
			 		echo "<script>alert('Password yang kamu masukan tidak sama!');window.location='../daftar.php';</script>";
		        	}
		        }

		    }

		}else {
			echo "<script>alert('Tolong penuhi form pendaftaran!');window.location='../daftar.php';</script>";
		}

	
	}



?>

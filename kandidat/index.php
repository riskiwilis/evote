<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link href="../css/bootstrap/bs-admin.min.css" rel="stylesheet">
	  <!-- Icon FA-->
  	<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<script src="../js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
  	<div class="container">
    	<div class="card card-login mx-auto mt-5">
      	<div class="card-header bg-dark text-center text-light"><h4><i class="fa fa-users"></i> Login Calon Ketua Himatif</h4></div>
      	<div class="card-body">
       	<img src="../images/logo.png" width="100%" height="90px">
       	<form action="php/cek-login.php" method="POST">
	        <div class="form-group">
	        	<label>Username</label>
	            <input class="form-control" name="username" type="text" placeholder="Enter Username Or Email" required>
	        </div>
	        <div class="form-group">
	            <label for="exampleInputPassword1">Password</label>
	        	<input class="form-control" name="password" type="password" placeholder="Enter Password" required>
	        </div>
	        <input type="submit" name="login" class="btn btn-dark btn-block mt-4" value="LOGIN" required>
        </form>
        <div class="text-center">
          	<a class="d-block small mt-3 fa fa-user-plus" href="daftar.php"> Daftar Akun</a>
          	<a class="d-block small fa fa-firefox" href="../index.html"> Kembali Ke Halaman Web</a>
        </div>
      </div>
    </div>
  	</div>
</body>
</html>
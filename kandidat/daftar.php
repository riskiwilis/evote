<!DOCTYPE html>
<html>
<head>
	<title>Daftar Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="../css/bootstrap/bs-admin.css" rel="stylesheet">
  <!-- Icon FA-->
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="../js/bootstrap.min.js"></script>
</head>

<body class="bg-dark">
  	<div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="card-header"><i class="fa fa-file"></i> Daftar Akun Calon Ketua Himatif</div>
      	<div class="card-body">
        <form action="php/ps-daftar.php" method="POST">
        	<div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text" placeholder="Enter username" required>
          	</div>
          	
          	<div class="form-group">
            	<label for="exampleInputEmail1">Email</label>
            	<input class="form-control" name="email" type="email" placeholder="Enter email" required>
          	</div>
          	
          	<div class="form-group">
            	<div class="form-row">
              		<div class="col-md-6">
                		<label for="exampleInputPassword1">Password</label>
                		<input class="form-control" name="password" type="password" placeholder="Password" required>
              		</div>
              		<div class="col-md-6">
                		<label for="exampleConfirmPassword">Konfirmasi password</label>
                		<input class="form-control" name="password2" type="password" placeholder="Confirm password" required>
              		</div>
            	</div>
          	</div>
            <input class="btn btn-dark btn-block" name="daftar" type="submit" value="DAFTAR"/>
        </form>
        <div class="text-center">
          	<a class="d-block small mt-3 fa fa-unlock-alt" href="index.php"> Halaman Login</a>
            <a class="d-block small mt-3 fa fa-firefox" href="../index.html"> Kembali Ke Halaman Web</a>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>
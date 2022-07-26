<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
    	<div class="card card-login mx-auto mt-5">
      	<div class="card-header bg-light text-center"><h4><i class="fa fa-user-circle"></i> Login Admin Panel</h4></div>
      	<div class="card-body">
       	<img src="../images/logo.png" width="100%" height="90px">	
        <form method="POST" action="php/ps-login.php">
	        <div class="form-group">
	        	<label for="username">Username</label>
	            <input class="form-control" name="username" type="text" placeholder="Username" required>
	        </div>
	        <div class="form-group">
	            <label for="password">Password</label>
	        	<input class="form-control" name="password" type="password" placeholder="Password" required>
	        </div>
	        <input type="submit" name="login" class="btn btn-primary btn-block mt-4" value="LOGIN">
	        <a class="d-block small mt-3 fa fa-firefox" href="../index.html">Kembali Ke Halaman Web</a>

        </form>
      </div>
    </div>
  	</div>
</body>
</html>
<?php
include('php/cek-akses.php');
include('../config/kon.php');

$id_akun=$_SESSION['id_akun'];
$sqlakun="SELECT * FROM tb_biodata WHERE id_akun='$id_akun'";
$query=mysqli_query($koneksi,$sqlakun);
$ada=mysqli_num_rows($query);
$r=mysqli_fetch_assoc($query);
?>   

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulir Pendaftaran</title>
  <head>
	<title>Daftar Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='../himatif.ico' rel='shortcut icon'>
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- js modal -->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body id="page-top">

<div class="bg-dark"> 
  <ul class="nav justify-content-end navbar navbar-expand-sm bg-dark navbar-dark">
    <li class="nav-item">
      <a class="nav-link text-light">
        Hai...
      <i class="fa fa-fw fa-user "></i><?=$_SESSION['user_kandidat'];?><a>
    </li>
    <li class="nav-item ">
      <a class="text-light" href="#id_logout" data-toggle="modal">
      <i class="fa fa-fw fa-sign-out" ></i>Logout</a>
    </li>
  </ul>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2 mt-3">
      <div class="list-group">
        <!-- Sidebar user panel -->
          <div class="card">
            <div class="card-body">

            <?php  
            if($ada==0){
              echo "<img src=\"../foto/0.png\" width=50 height=70 style=float:right; />";    
            }else{
              echo "<img src=\"../foto/$r[foto]\" width=50 height=70 style=float:right; />";    
            }
            ?>

            <?=$_SESSION['user_kandidat'];?>
            </br>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            
            </div>
          </div>
        
        <div class="card-header mt-3 bg-dark text-light">Menu</div>  
          <a href="index_kandidat.php?" class="list-group-item">Profile Biodata</a>
          <a href="index_kandidat.php?page=persyaratan" class="list-group-item">Persyaratan</a>
          <a href="#" class="list-group-item">Info</a>
      </div>
      
    </div>


  <div class="col-sm-10" style="height: 100%;">
      <div class="container">      
  <?php
        error_reporting(0);

          $page = $_GET['page'];

          if($page){
            include "$page".".php";
          }else{

            if(empty($ada)){
              include "formulir.php"; 
            }else{
              include "profile.php";
              //include "formulir.php";  
            }

          }
  ?>
      </div>
    </div>
    
    <a class="btn btn-dark mt-3" style="float: right;" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
  <!-- Scroll to Top Button-->
    
</div>

<!-- Logout Modal-->
    <div class="modal fade" id="id_logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tinggalkan akun anda?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan pilih logout jika anda ingin keluar dari akun ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="php/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
<!--endmodal-->


<footer class="card-footer mt-5 bg-dark text-light">
  Copy &copy Project PAW 2017
</footer>    

</body>
</html>

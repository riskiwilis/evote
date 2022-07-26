<?php
include('php/cek-akses.php');
?>   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Panel E-vote Himatif</title>
  <link href='../himatif.ico' rel='shortcut icon'>
  <!-- Bootstrap 4 CSS-->
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Icon FA-->
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="../js/bootstrap.min.js"></script>
  <!--costum css untuk admin-->
  <link href="../css/bootstrap/bs-admin.css" rel="stylesheet">
  <!-- Js modal-->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <!--costum js untuk tombol top-->
  <script src="../js/js-admin.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Nav sidebar kiri-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href=<?php echo "?page=home";?>>Administrator E-vote Himatif</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=" #navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item">
            <a class="nav-link" href=<?php echo "?page=home";?>>
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Home</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=<?php echo "?page=form_delegasi";?>>
              <i class="fa fa-fw fa-vcard-o"></i>
              <span class="nav-link-text">Input Data Delegasi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=<?php echo "?page=form_user_admin";?>>
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">Input Data User Admin</span>
            </a>
          </li>

          <li class="nav-item">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#akun" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-folder-open"></i>
                <span class="nav-link-text">Data Tabel User</span>
              </a>
          
              <ul class="sidenav-second-level collapse" id="akun">
                  <li>
                    <a href=<?php echo "?page=dt_Admin";?>>Data Admin User</a>
                  </li>
                   <li>
                    <a href=<?php echo "?page=dt_akun_kandidat";?>>Data Akun Kandidat</a>
                  </li>
                  <li>
                    <a href=<?php echo "?page=dt_delegasi";?>>Data Delegasi</a>
                  </li>
              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#data" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Data Tabel Informasi</span>
              </a>
          
              <ul class="sidenav-second-level collapse" id="data">
                  <li>
                    <a href=<?php echo "?page=dt_kandidat";?>>Data Kandidat</a>
                  </li>
                  <li>
                    <a href=<?php echo "?page=dt_profil";?>>Data Profil Kandidat</a>
                  </li>
                  <li>
                    <a href=<?php echo "?page=dt_pemilihan";?>>Data Pemilihan</a>
                  </li>
              </ul>
          </li>
        
          <li class="nav-item">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#laporan" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
          
              <ul class="sidenav-second-level collapse" id="laporan">
                <li>
                  <a href=<?php echo "?page=syarat";?>>Persyaratan Calon Ketua</a>
                </li>
                <li>
                  <a href=<?php echo "?page=laporan_delegasi";?>>Laporan Data Delegasi</a>
                </li>
                <li>
                  <a href=<?php echo "?page=chart";?>>Grafik Hasil Sementara</a>
                </li>
              </ul>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href=<?php echo "?page=tentang";?>>
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">About</span>
            </a>
          </li>
      
      </ul>
      <!-- End Nav sidebar kiri-->

      <!-- Nav  atas-->
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item dropdown">
          <a class="nav-link " data-toggle="dropdown">
            <i class="fa fa-fw fa-gears"></i>
          </a>
          <div class="dropdown-menu">
            <a class="nav-link dropdown-item text-dark" data-toggle="modal" data-target="#id_reset">Reset Sistem Pemilihan</a>
            <div class="dropdown-divider"></div>
            <a class="nav-link dropdown-item text-dark" data-toggle="modal" data-target="#id_reset_all">Reset All</a>
          </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link">
              Date :
              <?php 
                $tgl = date("Y-m-d");
                echo $tgl;
              ?>
            </a>
        </li>    
        <li class="nav-item">
          <a class="nav-link">
            Hai...
            <i class="fa fa-fw fa-user"></i><?=$_SESSION['nama_admin'];?><a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#id_logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
      <!-- End Nav sidebar atas-->

    </div>
  </nav>
  <!-- End Nav All-->

  <!--content wrapper-->
  <div class="content-wrapper">
    <!--content isi-->
    <?php
          error_reporting(0);

            $page = $_GET['page'];

            if($page){
              include "$page".".php";
            }else{
              include "home.php";
            }

    ?>  
  </div>  
  <!-- end content-wrapper-->
    
    <!--footer-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy E-VOTE</small>
        </div>
      </div>
    </footer>

    <!-- Scroll Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- End Scroll Top Button-->

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

    <div class="modal fade" id="id_reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Sistem Pemilihan?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan pilih reset jika anda ingin mereset sistem pemilihan.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form action="php/reset_pemilihan.php" method="POST">
              <button class="btn btn-primary" type="submit" name="reset">Reset</button> 
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="id_reset_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset All Sistem Default?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan pilih Reset All jika anda ingin mereset all sistem default.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form action="php/reset_all.php" method="POST">
              <button class="btn btn-primary" type="submit" name="reset">Reset All</button> 
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--End Logout Modal-->
    
  <!--</div>-->  
</body>

</html>

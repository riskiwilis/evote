<?php 
include('../config/kon.php');
include('php/cek-akses.php');

$sql="SELECT * FROM tb_kandidat ORDER BY id_kandidat";
$query=mysqli_query($koneksi,$sql);

$sqljs="SELECT sum(jml_suara) as jsuara FROM tb_kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);

$id_pemilih=$_SESSION['id_delegasi'];
$sqlpilih="SELECT * FROM tb_pemilihan WHERE id_pemilih='$id_pemilih'";
$querypilih=mysqli_query($koneksi,$sqlpilih);
$ada=mysqli_num_rows($querypilih);
?>

<div class="card mb-3 mt-3">
  <div class="card-header bg-dark text-light"><i class="fa fa-file"></i> 
    Daftar Kandidat Ketua Himatif
  </div>
  
        <div class="card-body mt-3">
          <div class="row">
            
          <?php
              while ($data = mysqli_fetch_array($query)) {
                echo "<div class='card col-md-3 container'>";
                echo "<div class='card-body'>";
                echo '<img src="../foto/'.$data['foto'].'" width=70 height=90 style=float:right; >';
                echo "<b>".$data['nama_kandidat']."</b>";
                echo '<br>'.$data['nim'];
                echo '<br><a href="index_delegasi.php?page=detail_kandidat&nim='.$data['nim'].'">View Detail<a></br>';
                if ($data['jml_suara'] == 0) {
                  echo "<p> Jumlah suara : ".strval($data['jml_suara'])."</p>";
                }else{
                  echo "<p> Jumlah suara : ".strval($data['jml_suara'])."</p>";
                  echo "<h3>";
                  echo strval($data['jml_suara']/$rjs['jsuara']*100);
                  echo "</h3>";
                }
                if($ada==0){
                    echo'<a href="php/ps-pemilihan.php?id='.$data['id_kandidat'].'" class="small-box-footer">Pilihan Anda? <i class="fa fa-arrow-circle-up"></i></a>';
                }else{
                  echo '<a href="#" class="small-box-footer">Anda sudah memilih <i class="fa fa-check"></i></a>';
                }
                echo "</div>";
                echo "</div";
              }
          ?>
          </div>
        </div>
        <div class="card card-footer mt-4 bg-dark text-light">Aplikasi E-vote</div>
      </div>
  </div>
</div>

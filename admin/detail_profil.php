<?php 
include ('../config/kon.php'); 
include ('php/cek-akses.php'); 


$nim=$_GET['nim'];
$id_biodata = $_GET['id_biodata'];
$sql="SELECT * FROM tb_biodata WHERE nim='$nim' OR id_biodata='$id_biodata' ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index_admin.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Biodata Kandidat</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Detail Profil Kandidat</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
          
          <tbody>
          <tr>
            <td width=150>Nama Calon Ketua</td>
            <td><?php echo$r['nama_calon'];?></td>
          </tr>

          <tr>
            <td>NIM</td>
            <td><?php echo$r['nim'];?></td>
          </tr>
          <tr>
            <td>Nilai IPK</td>
            <td><?php echo$r['ipk'];?></td>
          </tr>
          <tr>
            <td>Visi</td>
            <td><?php echo$r['visi'];?></td>
          </tr>
          <tr>
            <td>Misi</td>
            <td><?php echo$r['misi'];?></td>
          </tr>
          <tr>
            <td>Foto</td>
            <td>
<?php 
            if ($r['foto']!=''){
              echo "<img src=\"../foto/$r[foto]\" height=150 />";  
            }
            else{
              echo "<img src=\"../foto/0.jpg\">";
            }
?>
          </tr>

          <tr>
            <td colspan=2>
            <a href="index_admin.php?page=dt_kandidat" class="btn btn-large btn-danger"><i class="fa fa-times"></i> BACK</a>&nbsp;
            <a href="index_admin.php?page=syarat" class="btn btn-large btn-warning"><i class="fa fa-table"></i> View Data Persyaratan</a></td>
          </tr>
                </tbody>
              </table>

    </div>
  </div>
</div>


</div>

<?php 
include ('../config/kon.php'); 
include ('php/cek-akses.php'); 

$id=$_GET['id'];
$sql="SELECT * FROM tb_kandidat WHERE id_kandidat='$id' ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index_admin.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Detail Kandidat</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Detail Kandidat Ketua Himatif</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
          <tbody>
          <tr>
            <td width=150>ID Kandidat</td>
            <td><?php echo$r['id_kandidat'];?></td>
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
            <td>NIM</td>
            <td><?php echo$r['nim'];?></td>
          </tr>
          <tr>
            <td>Nama Kandidat</td>
            <td><?php echo$r['nama_kandidat'];?></td>
          </tr>
          <tr>
            <td>Jumlah Suara</td>
            <td><?php echo$r['jml_suara'];?></td>
          </tr>
          
          
          <tr>
            <td colspan=2>
            <?php  
            echo '<a href="index_admin.php?page=edit_kandidat&id='.$r['id_kandidat'].'" class="btn btn-large btn-primary"><i class="fa fa-times"></i> Edit</a>';
            ?>
            <a href="index_admin.php?page=dt_pemilihan" class="btn btn-large btn-danger"><i class="fa fa-times"></i> BACK</a></td>
          </tr>
                </tbody>
              </table>

    </div>
  </div>
</div>


</div>

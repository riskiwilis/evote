<?php 
include ('../config/kon.php'); 
include ('php/cek-akses.php'); 

$id=$_GET['id'];
$sql="SELECT * FROM tb_delegasi WHERE id_delegasi='$id' ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index_admin.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Detail Delegasi</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Detail Delegasi Pemilih</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
          <tbody>
          <tr>
            <td width=150>Nama Delegasi</td>
            <td><?php echo$r['nama_delegasi'];?></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td><?php echo$r['nim'];?></td>
          </tr>
          <tr>
            <td>Angkatan</td>
            <td><?php echo$r['angkatan'];?></td>
          </tr>
          <tr>
            <td>Status Memilih</td>
            <td><?php echo$r['status'];?></td>
          </tr>
          <tr>
            <td colspan=2>
            <a href="index_admin.php?page=dt_pemilihan" class="btn btn-large btn-danger"><i class="fa fa-times"></i> BACK</a>&nbsp;
            <a href="index_admin.php?page=dt_delegasi" class="btn btn-large btn-warning"><i class="fa fa-table"></i> View Data Delegasi</a></td>
            </td>
          </tr>
                </tbody>
              </table>

    </div>
  </div>
</div>


</div>

<?php 
include ('../config/kon.php'); 
include ('php/cek-akses.php'); 

$id=$_GET['id'];
$nim=$_GET['nim'];
$sql="SELECT * FROM tb_biodata WHERE id_biodata='$id' OR nim='$nim' ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

<div class="container-fluid mt-3">
<div class="card mb-3">
  <div class="card-header bg-dark text-light"><i class="fa fa-table"></i> 
    Data Detail Profil Kandidat</div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="pilkasis1" class="table table-bordered table-hover table-striped">
          <tbody>
          <tr>
            <td width="250px">Nama Calon Ketua</td>
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
            <a href="index_delegasi.php?page=pemilihan" class="btn btn-large btn-warning"><i class="fa fa-edit"></i> Mulai Memilih</a>  
            <a href="index_delegasi.php?page=view_kandidat" class="btn btn-large btn-danger"><i class="fa fa-times"></i> Back to Data Kandidat</a></td>
          </tr>
                </tbody>
              </table>

    </div>
  </div>
</div>


</div>

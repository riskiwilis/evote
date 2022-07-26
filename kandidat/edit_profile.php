<?php
include('php/cek-akses.php');
include('../config/kon.php');

$nim = $r['nim'];
$sql1 = "SELECT * FROM tb_syarat WHERE nim ='$nim' ";
$query1 = mysqli_query($koneksi,$sql1);
$show = mysqli_fetch_assoc($query1);
?>   
  <div class="card mt-3">
    <div class="card-header bg-dark text-light">Form Persyaratan Calon Ketua Himatif</div>
      <div class="card-body">

      <form action="php/edit.php" method="POST" enctype="multipart/form-data">
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <tbody>
        <input type="hidden" name="id" value="<?php echo $r['id_biodata'] ?>">  
        <tr>
          <td width="150px">Nama Lengkap</td>
          <td>
            <input class="form-control col-md-5" name="nama_calon" type="text" value="<?php echo $r['nama_calon'];?> " required>
          </td>
        </tr>
        
        <tr>
          <td>NIM</td>
          <td>
            <input class="form-control col-md-2" name="nim" type="text" value="<?php echo $r['nim'];?> " required="">
          </td>
        </tr>
        <tr>
          <td>IPK</td>
          <td>
            <input class="form-control col-md-1" name="ipk" type="text" value="<?php echo $r['ipk'];?> " required>*Example Nilai IPK 3.00
          </td>
        </tr>
        <tr>
          <td>Visi</td>
          <td>
            <textarea class="form-control col-md-5" name="visi" placeholder="Misi" rows="4"><?php echo$r['visi'];?></textarea>
            </textarea>
          </td>
        </tr>
        <tr>
          <td>Misi</td>
          <td>
            <textarea class="form-control col-md-5" name="misi" placeholder="Misi" rows="4"><?php echo$r['misi'];?></textarea>
          </td>
        </tr>
        <tr>
          <td>Foto</td>
          <td>
             <?php 
            if ($r['foto']!=''){
              echo "<img src=\"../foto/$r[foto]\" height=150 />";  
            }
            else{
              echo "<img src=\"../foto/0.png\">";
            }
          ?>
             
          </td>
        </tr>
        <tr>
          <td>Ganti Foto</td>
          <td>
            <input class="form-control col-md-5 mt-2" name="gambar" type="file"> *Kosongkan apabila tidak ingin menganggati foto anda
          </td>
        </tr>
        <tr>
          <td colspan=3>
          <input type="submit" name="tambah" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
          <a href="index_kandidat.php" class="btn btn-large btn-danger"><i class="fa fa-times"></i> Back</a>
        </tr>
        </tbody>
      </table>
     </form>

 </div>
</div>
   
<?php
include('php/cek-akses.php');
?>   
  <div class="card mt-3">
    <div class="card-header bg-dark text-light">Form Persyaratan Calon Ketua Himatif</div>
      <div class="card-body">

      <form action="php/ps-formulir.php" method="POST" enctype="multipart/form-data">
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <tbody>
        <tr>
          <td width="150px">Nama Lengkap</td>
          <td>
           <?php echo $r['nama_calon'];?>
              
          </td>
        </tr>
        
        <tr>
          <td>NIM</td>
          <td>
            <?php echo $r['nim'];?>  
            
          </td>
        </tr>
        <tr>
          <td>IPK</td>
          <td>
            <?php echo $r['ipk'];?>  
          </td>
        </tr>
        <tr>
          <td>Visi</td>
          <td>
            <?php echo $r['visi'];?>  
          </td>
        </tr>
        <tr>
          <td>Misi</td>
          <td>
            <?php echo $r['misi'];?>  
            
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
          <td colspan=3>
            <a href="index_kandidat.php?page=edit_profile&id='.$r['id_biodata'].'" class="btn btn-large btn-primary mt-3"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;
            <a class="btn btn-warning col-md-2 mt-3 text-dark" href="index_kandidat.php?page=cek-nim"><i class="fa fa-file"></i> Upload Syarat</a>  
          </td>
        </tr>
        </tbody>
      </table>
     </form>

 </div>
</div>


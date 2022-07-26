<?php
include('php/cek-akses.php');
?>   

<!--Content isi-->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index_admin.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Form Data Delegasi</li>
  </ol>
    
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-table"></i>Tambah Data Delegasi</div>
      <div class="card-body">
      <form action="php/delegasi/tambah.php" method="POST">
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <tbody>
        <tr>
          <td width="250px">Nama Delegasi</td>
          <td>
            <input class="form-control col-md-5" name="nama_delegasi" type="text" placeholder="Enter Nama Lengkap" required>
          </td>
        </tr>
        
        <tr>
          <td>Nim</td>
          <td><input class="form-control col-md-2" name="nim" type="text" placeholder="Enter NIM" required ></td>
        </tr>
        <tr>
          <td>Angkatan</td>
          <td>
           <select name="angkatan" class="form-control col-md-2" required>
              <option selected="selected">Tahun</option>
              <?php
                for($i=date('Y'); $i>=date('Y')-10; $i-=1){
                echo"<option value='$i'> $i </option>";
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan=3>
          <input type="submit" name="tambah" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
          <a href="index_admin.php?page=dt_delegasi" class="btn btn-large btn-danger"><i class="fa fa-table"></i> View Data Delegasi</a></td>
        </tr>
        </tbody>
      </table>
     </form>

    </div>
  </div>
</div>  


   


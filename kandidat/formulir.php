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
            <input class="form-control col-md-5" name="nama_calon" type="text" placeholder="Enter nama lengkap" required>
          </td>
        </tr>
        
        <tr>
          <td>NIM</td>
          <td>
            <input class="form-control col-md-2" name="nim" type="text" placeholder="Enter NIM" required="">
          </td>
        </tr>
        <tr>
          <td>IPK</td>
          <td>
            <input class="form-control col-md-1" name="ipk" type="text" placeholder="IPK" required >
            *Example Nilai IPK 3.00
          </td>
        </tr>
        <tr>
          <td>Visi</td>
          <td>
            <textarea class="form-control col-md-5" rows="4" name="visi"  type="text" placeholder="Enter Visi" required ></textarea>
          </td>
        </tr>
        <tr>
          <td>Misi</td>
          <td>
            <textarea class="form-control col-md-5" rows="4" name="misi"  type="text" placeholder="Enter Misi" required ></textarea>
          </td>
        </tr>
        <tr>
          <td>Foto</td>
          <td>
            <input class="form-control col-md-5" name="gambar" type="file">
          </td>
        </tr>
        <tr>
          <td colspan=3>
          <input type="submit" name="tambah" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
        </tr>
        </tbody>
      </table>
     </form>

 </div>
</div>
   
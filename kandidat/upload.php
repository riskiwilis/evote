<?php
include('php/cek-akses.php');
?>   
<div class="card mt-3">
	<div class="card-header bg-dark text-light">Form Persyaratan Calon Ketua Himatif</div>
		<div class="card-body">

      <form action="php/ps-upload.php" method="POST" enctype="multipart/form-data">
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <tbody>  
        <input name="id_biodata" type="hidden" value="<?php echo $r['id_biodata'];?>" >
        <tr>
          <td width="200px">NIM</td>
          <td>
            <input class="form-control col-md-2" name="nim" type="text" value="<?php echo $r['nim'];?>" required>
          </td>
        </tr>
        <tr>
          <td>File Persyaratan</td>
          <td>
          <p>File yang bisa di Upload hanya file dengan ekstensi 
          <b>.doc, .docx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
          <p>Silahkan Upload FIle :
          <ol>
            <li>Transkip Nilai</li>
            <li>Surat Keterangan Ketua jurusan</li>
            <li>Surat Aktif Organisasi</li>
            <li>Surat Keterangan Mahasiswa Aktif</li>
          </ol>
          *File bisa di upload secara beruntun
          </br>*Atau di kolektifkan dalam bentuk zip / rar  
            <input class="form-control col-md-5" name="file[]" type="file" multiple >
          </td>
        </tr>
        <tr>
          <td colspan=3>
          <input type="submit" name="tambah" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
          <a class="btn btn-danger" href="index_kandidat.php?page=persyaratan"><i class="fa fa-times"></i> BACK</a>    

        </tr>
        </tbody>
      </table>
     </form>

 </div>
</div>

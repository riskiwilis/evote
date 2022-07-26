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
    <li class="breadcrumb-item active">Data Kandidat</li>
  </ol>
  
	<div class="card mb-3">
	  <div class="card-header"><i class="fa fa-table"></i> 
	    Edit Data Kandidat</div>
	      <div class="card-body">
	
	<!--Mulai buat form-->
		<form action="php/kandidat/edit.php" method="POST">
	     <div class="table-responsive">
		  <table class="table table-bordered table-hover table-striped">
		    <tbody>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<tr>
					<td width="250px">Nama Kandidat</td>
					<td><input class="form-control col-md-5" name="nama_kandidat" type="text" value="<?php echo $r['nama_kandidat']; ?>" required></td>
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
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input class="form-control col-md-5" name="nim" type="text" value="<?php echo $r['nim']; ?>" required></td>
				</tr>
				<tr>
					<td>Jumlah Suara</td>
					<td><input class="form-control col-md-5" name="jml_suara" type="text" value="<?php echo $r['jml_suara']; ?>" required></td>
				</tr>
				<tr>
					<td colspan=3>
					<input type="submit" name="tambah" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
					<input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
					<a href="index_admin.php?page=dt_kandidat" class="btn btn-large btn-danger"><i class="fa fa-times"></i> Back</a></td>
				</tr>
		    </tbody>
		  </table>
		 </form>
	    </div>
	</div>
</div>      	


	 
	
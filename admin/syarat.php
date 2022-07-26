<?php
include('php/cek-akses.php');
?>   

<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>


<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Tabel Delegasi</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Table Delegasi
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal Upload</th>
              <th>File</th>
              <th>Ukuran</th>
              <th>Nama Kandidat</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Tanggal Upload</th>
              <th>File</th>
              <th>Ukuran</th>
              <th>NIM Kandidat</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          //$query = mysql_query("SELECT * FROM tb_syarat ORDER BY id_syarat DESC") or die(mysql_error());
          $sql = "SELECT * FROM tb_syarat ORDER BY id_syarat DESC";
          $query = mysqli_query($koneksi, $sql);
          if(mysqli_num_rows($query) == 0){  
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;  
           // while($data = mysql_fetch_assoc($query)){ 
            while ($data = mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['tgl_upload'];?></td>
                <td><?php echo '<a href="../file/'.$data['file'].'">'.$data['file'].'</a>';?></td>
                <td><?php echo $data['ukuran_file'];?></td>
                <td><?php echo '<a href="index_admin.php?page=detail_profil&nim='.$data['nim'].'">'.$data['nim'].'</a>';?></td>
                <td><?php echo '<a class="fa fa-edit" href="index_admin.php?page=detail_profil&id_biodata='.$data['id_biodata'].'"> Detail / <a class="fa fa-trash" href="php/syarat/hapus.php?id='.$data['id_syarat'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')"> Hapus</a>';?>
                </td>

              </tr>
        <?php 
            $no++;
            }
          }  
        ?>

        </tbody>
      </table>

      <script>
        $(document).ready(function() {
        $('#example').DataTable();
        });
      </script>

    </div>
  </div>
</div>


</div>


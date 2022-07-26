<?php
include('php/cek-akses.php');
?>   

<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>


<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#=">Home</a>
    </li>
    <li class="breadcrumb-item active">Tabel Biodata Calon Ketua</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Table Biodata
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Detail</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>IPK</th>
              <th>VISI</th>
              <th>MISI</th>
              <th>Foto</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Detail</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>IPK</th>
              <th>VISI</th>
              <th>MISI</th>
              <th>Foto</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php

        include('../config/kon.php');
          $sql = "SELECT * FROM tb_biodata ORDER BY id_biodata DESC";
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
                <td><?php echo '<a href="index_admin.php?page=detail_biodata&id='.$data['id_biodata'].'">View</a>';?></td>
                <td><?php echo $data['nama_calon'];?></td>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['ipk'];?></td>
                <td><?php echo $data['visi'];?></td>
                <td><?php echo $data['misi'];?></td>
                <td><?php echo $data['foto'];?></td>
                <td><?php echo '
                <a class="fa fa-trash" href="php/biodata_kandidat/hapus.php?id='.$data['id_biodata'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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


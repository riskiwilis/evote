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
              <th>Nama</th>
              <th>Nim</th>
              <th>Password</th>
              <th>Angkatan</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>Password</th>
              <th>Angkatan</th>
              <th>Status</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          
          $sql = "SELECT * FROM tb_delegasi ORDER BY id_delegasi DESC";
          $query = mysqli_query($koneksi,$sql);
          if(mysqli_num_rows($query)==0){
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;   
            while ($data = mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama_delegasi'];?></td>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['password'];?></td>
                <td><?php echo $data['angkatan'];?></td>
                <td><?php echo $data['status'];?></td> 
                <td><?php echo '<a class="fa fa-pencil" href="index_admin.php?page=edit_delegasi&id='.$data['id_delegasi'].'">Edit</a> / 
                <a class="fa fa-trash" href="php/delegasi/hapus.php?id='.$data['id_delegasi'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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

      <a class="btn btn-primary btn-block mt-4 col-md-2" href="index_admin.php?page=form_delegasi"><i class="fa fa-plus"></i> Tambah</a>

    </div>
  </div>
</div>


</div>



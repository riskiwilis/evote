<?php
include('php/cek-akses.php');
?>   

<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>


<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index_admin.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Tabel Admin User</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Tabel Admin User
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          $sql = "SELECT * FROM tb_admin ORDER BY id_admin DESC";
          $query = mysqli_query($koneksi,$sql);
          if(mysqli_num_rows($query)==0){  
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;  
            while ($data =mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['password'];?></td>
                <td><?php echo '<a class="fa fa-pencil" href="index_admin.php?page=edit_admin&id='.$data['id_admin'].'">Edit</a> / 
                <a class="fa fa-trash" href="php/user_admin/hapus.php?id='.$data['id_admin'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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

      <a class="btn btn-primary btn-block mt-4 col-md-2" href="index_admin.php?page=form_user_admin"><i class="fa fa-plus"></i> Tambah</a>
    </div>
  </div>
</div>


</div>



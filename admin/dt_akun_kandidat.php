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
    <li class="breadcrumb-item active">Data Tabel Akun Kandidat</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Tabel Akun Kandidat
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>              
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          $sql = "SELECT * FROM tb_akun ORDER BY id_akun DESC";
          $query = mysqli_query($koneksi,$sql);
          if(mysqli_num_rows($query)==0){  
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;  
            while ($data =mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['password'];?></td>
                <td><?php echo $data['email'];?></td>

                <td><?php echo '<a class="fa fa-pencil" href="index_admin.php?page=edit_admin&id='.$data['id_admin'].'">Edit</a> / 
                <a class="fa fa-trash" href="php/akun_kandidat/hapus.php?id='.$data['id_akun'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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



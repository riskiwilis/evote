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
    <li class="breadcrumb-item active">Tabel Data Pemilihan</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Tabel Pemilihan
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Pemilihan</th>
              <th>Id Pemilih</th>
              <th>Id Kandidat</th>
              <th>Waktu</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Id Pemilihan</th>
              <th>Id Pemilih</th>
              <th>Id Kandidat</th>
              <th>Waktu</th>
              <th>Opsi</th>
          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          
          $sql = "SELECT * FROM tb_pemilihan ORDER BY id_pemilihan DESC";
          $query = mysqli_query($koneksi,$sql);
          if(mysqli_num_rows($query)==0){
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;   
            while ($data = mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['id_pemilihan'];?></td>
                <td><?php echo '<a href="index_admin.php?page=detail_pemilih&id='.$data['id_pemilih'].'">'.$data['id_pemilih'].'</a>';?></td>
                <td><?php echo '<a href="index_admin.php?page=detail_kandidat&id='.$data['id_kandidat'].'">'.$data['id_kandidat'].'</a>';?></td>                
                <td><?php echo $data['waktu'];?></td>
                <td><?php echo '<a class="fa fa-pencil" href="index_admin.php?page=edit_delegasi&id='.$data['id_delegasi'].'">Edit</a> / 
                <a class="fa fa-trash" href="php/pemilihan/hapus.php?id='.$data['id_pemilihan'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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
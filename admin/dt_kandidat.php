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
    <li class="breadcrumb-item active">Tabel Kandidat</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Tabel Kandidat
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Kandidat</th>
              <th>Foto</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jumlah Suara</th>
              <th>Opsi</th>

            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Id Kandidat</th>
              <th>Foto</th>
              <th>NIM</th>
              <th>Nama Kandidat</th>
              <th>Jumlah Suara</th>
              <th>Opsi</th>

          </tfoot>
        
        <tbody>
        
        <?php
        include('../config/kon.php');
          $sql = "SELECT * FROM tb_kandidat ORDER BY id_kandidat DESC";
          $query = mysqli_query($koneksi,$sql);
          if(mysqli_num_rows($query)==0){  
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
          }else{ 
            $no = 1;  
            while ($data =mysqli_fetch_assoc($query)){ ?>
              <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['id_kandidat'];?></td>
                <td><?php echo '<img src=" ../foto/'.$data['foto'].'" width="80px" height="100px">';?></td>
                <td><?php echo '<a href="index_admin.php?page=detail_profil&nim='.$data['nim'].'">'.$data['nim'].'</a>';?></td>
                <td><?php echo $data['nama_kandidat'];?></td>
                <td><?php echo $data['jml_suara'];?></td>
                <td><?php echo '<a class="fa fa-pencil" href="index_admin.php?page=edit_kandidat&id='.$data['id_kandidat'].'">Edit</a> / <a class="fa fa-trash" href="php/kandidat/hapus.php?id='.$data['id_kandidat'].'&nim='.$data['nim'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a>';?>
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


<img >
<?php
include('php/cek-akses.php');
?>   

<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
  
<div class="card mb-3 mt-3">
  <div class="card-header bg-dark text-light"><i class="fa fa-table"></i> 
    Data Profile Kandidat Ketua Himatif
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Detail</th>
              <th>Foto</th>              
              <th>Nama</th>
              <th>Nim</th>
              <th>VISI</th>
              <th>MISI</th>
              <th>IPK</th>

            </tr>
          </thead>
          <tfoot>
              <th>No</th>
              <th>Detail</th>
              <th>Foto</th>              
              <th>Nama</th>
              <th>Nim</th>
              <th>VISI</th>
              <th>MISI</th>
              <th>IPK</th>

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
                <td><?php echo '<a href="index_delegasi.php?page=detail_kandidat&id='.$data['id_biodata'].'">View</a>';?></td>
                <td><?php echo '<img src=" ../foto/'.$data['foto'].'" width="130px" height="150px">';?></td>
                <td><?php echo $data['nama_calon'];?></td>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['visi'];?></td>
                <td><?php echo $data['misi'];?></td>
                <td><?php echo $data['ipk'];?></td>
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


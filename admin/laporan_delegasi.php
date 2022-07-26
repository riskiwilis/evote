<?php
include('php/cek-akses.php');
?>   

<link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTables.css">
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<script type="text/javascript" src="../datatables/js/jquery.dataTables.min.js"></script>
<style type="text/css" title="currentStyle"> 
  @import "../datatables/css/demo_table_jui.css";
  @import "../datatables/css/TableTools.css";
</style>
<script type="text/javascript" language="javascript" src="../datatables/js/ZeroClipboard.js"></script>
<script type="text/javascript" language="javascript" src="../datatables/js/TableTools.js"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
  $('#example').dataTable({ 
    "sPaginationType": "full_numbers",
    "sDom": 'T<"clear">lfrtip',
    "oTableTools": {
    "sSwfPath": "../dt/swf/copy_csv_xls_pdf.swf"
      }
    });
  });
</script>

<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Laporan Data Delegasi</li>
  </ol>
  
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> 
    Data Tabel Delegasi
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
            </tr>
          </thead>
          <tfoot>
          </thead>
              <th>No</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>Password</th>
              <th>Angkatan</th>
              <th>Status</th>
          </thead>    
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
              </tr>
        <?php 
            $no++;
            }
          }  
        ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>



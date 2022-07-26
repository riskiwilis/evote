<?php
include('php/cek-akses.php');

//$id_akun = $_SESSION['id_akun'];
//if((empty($ada)) && ($r['nim']==0)) {
if(($r['id_biodata']==0) && ($r['nim']==0)) {  
    echo "<script>alert('Silahkan Isi Terlebih Dahulu Biodata Anda !');window.location='index_kandidat.php';</script>";     
   }else{
      //echo "Sudah Mengisi";
    header('location:index_kandidat.php?page=upload');
      //echo "<script>window.location='index_kandidat.php?page=upload';</script>";
}
?>   
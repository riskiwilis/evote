<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['user_kandidat']) AND empty($_SESSION['id_akun'])){
    echo '<script language="javascript">alert("Anda harus Login Terlebih DahuLu!"); document.location="../kandidat/index.php";</script>';

}

?>
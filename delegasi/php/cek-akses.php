<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['user_delegasi']) AND empty($_SESSION['id_delegasi'])){
    echo '<script language="javascript">alert("Anda harus Login Terlebih DahuLu!"); document.location="../delegasi/index.php";</script>';

}

?>
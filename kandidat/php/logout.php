<?php
session_start();
unset($_SESSION['user_kandidat']);
unset($_SESSION['id_akun']);
session_destroy();
header('location:../index.php');
?>
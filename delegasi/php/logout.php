<?php
unset($_SESSION['id_delegasi']);
unset($_SESSION['user_delegasi']);

session_start();
session_destroy();
header('location:../index.php');
?>
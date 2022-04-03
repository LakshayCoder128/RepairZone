<?php include "db.php"?>
<?php include 'header.php';?>
<?php
unset($_SESSION['user']);
session_destroy();
header('Location: http://localhost/corewebsite/login.php');
?>
<?php include 'footer.php';?>
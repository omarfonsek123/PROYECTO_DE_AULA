<?php 
  session_start();
  if($_SESSION['email']==null)header('Location: ../index.php');
?>
<?php include "../vista/base_ini_head.html" ?>
<?php include "../vista/base_ini_body.html" ?>
<?php include "../vista/base.php" ?>
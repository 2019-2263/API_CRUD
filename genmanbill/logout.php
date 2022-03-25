<?php
//require_once('core/initialize.php');
session_start();
session_destroy();
if(isset($_SESSION['genman'])){
  unset($_SESSION['genman']);
}
unset($_SESSION);


header("Location: login.php");
?>

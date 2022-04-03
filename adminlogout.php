<?php session_start();
$_SESSION["adminname"]="";
session_destroy();
header("Location:adminlogin.php");

?>

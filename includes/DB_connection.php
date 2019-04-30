<?php 
require_once "config.php";

$connection = mysqli_connect(
	$db_connection['host'], 
	$db_connection['login'], 
	$db_connection['password'], 
	$db_connection['database_name']);

if ($connection == false)
  {
    exit("Error: " . mysqli_connect_error());
  }
 ?>

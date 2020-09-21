<?php 
require_once "config.php";

$connection = mysqli_connect(
	$db_connection['host'], 
	$db_connection['login'], 
	$db_connection['password'], 
	$db_connection['database_name']);

if (!$connection) {

    $connection = mysqli_connect(
	$db_connection_HOST['host'], 
	$db_connection_HOST['login'], 
	$db_connection_HOST['password'], 
	$db_connection_HOST['database_name']);

  }
 ?>

<?php 

$connection = mysql_connect('127.0.0.1', 'root', '', 'dishes');

if ($connection == false) {
echo 'cannot get to the bd<br>';
echo mysql_connect_error();
exit();
}





 ?>

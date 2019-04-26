<?php 
require_once "config.php"; 

$link = mysqli_connect(
	$db_connection['host'], 
	$db_connection['login'], 
	$db_connection['password'], 
	$db_connection['database_name']
) 
    or die("Ошибка " . mysqli_error($link));
mysqli_close($link);

if (isset($_GET['prots_data2']) || isset($_GET['idNumber'])) {
echo 'prots in data2 - ' . $_GET['prots_data2']; 
echo "idNumber - " . $_GET['idNumber'];
} 
else {
	echo 'total failure :(';
}
?>

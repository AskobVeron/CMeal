<?php 
include 'DB_connection.php';

$find_token = " SELECT * FROM `users` 
WHERE `token` = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

if ( empty($_POST['input']) ) {

	exit();

} if ( !empty($_POST['input']) &&
	  !isset($_POST['selected']) ) {
	
	$input = $_POST['input'];
	
$find_matches = "SELECT * FROM `dishes` 
WHERE `User` = '$result_token[login]'
AND `Dish` LIKE '$input%' OR `Dish` 
LIKE '%$input%' AND `User` = '$result_token[login]' 
ORDER BY `id` DESC limit 5";

$matches = mysqli_query($connection, $find_matches);

if( mysqli_num_rows($matches) !== 0 ) {

    while ( $col_match = mysqli_fetch_row($matches) ) {

        $Dish_mtchs = $col_match[2];

        echo '<li class="popupItem">'. $Dish_mtchs .'</li>';

		}

	} else {
		
		exit();
	}

}

 ?>

<?php 
include 'DB_connection.php';

$token = $_COOKIE['token'];

$find_token =" 
SELECT *
FROM `users` 
WHERE token = '$token' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

$Login = $result_token['login'];

if ( empty($_POST['input']) ) 
{
	exit();
} 

if ( !empty($_POST['input']) &&
	 !isset($_POST['selected']) ) 
{

	$input = mysqli_real_escape_string(
		$connection, 
		$_POST['input']);

	$login = $result_token['login'];
	
$find_matches = "
SELECT * 
FROM `dishes` 
WHERE `User` = '$login'
AND `Dish` 
LIKE '$input%' 
OR `Dish` 
LIKE '%$input%' 
AND `User` = '$Login' 
ORDER BY `id` 
DESC limit 5
";

$matches = mysqli_query($connection, $find_matches);

if( mysqli_num_rows($matches) !== 0 ) 
{

    while ( $col_match = mysqli_fetch_row($matches) ) 
    {

        $Dish_mtchs = $col_match[2];
        $Weight_mtchs = $col_match[6];

    	$check_name = "SELECT * FROM `dishes` 
		WHERE Dish = '$Dish_mtchs'
		AND `User` = '$Login'";

		$check_name_query = mysqli_query(
			$connection, 
			$check_name);

		if ( mysqli_num_rows($check_name_query) > 1 ) 
		{

			if ( strlen($Dish_mtchs) >= 17) 
			{
		echo '<li class="popupItem"><span class="name_D">' 
      . $Dish_mtchs . 
      '</span>'
      . PHP_EOL . 
      '(<span class="name_W">'
      . $Weight_mtchs . 
       '</span>гр)</li>';
			} 

			else 
			{

       echo '<li class="popupItem"><span class="name_D">' 
      . $Dish_mtchs . 
      '</span> (<span class="name_W">'
      . $Weight_mtchs . 
       '</span>гр)</li>';
   			}

		}

		else 
		{
			echo '<li class="popupItem"><span class="name_D">'
			 . $Dish_mtchs . 
			 '</span></li>';
	  	}


	}

} else {exit();}

}

 ?>

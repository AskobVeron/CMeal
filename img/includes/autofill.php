<?php 

include 'DB_connection.php';

if ( !isset($_POST['selected']) ) 
{
	exit();
} 

else 
{
	$token = $_COOKIE['token'];

	$find_token =" 
	SELECT * 
	FROM `users` 
	WHERE token = '$token'
";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

$Login = $result_token['login'];

	$selected = $_POST['selected'];
	$selected_W = $_POST['selected_W'];

if (empty($selected_W)) 
{
    $find_match ="
    SELECT * 
    FROM `dishes` 
    WHERE `User` = '$Login'
    AND `Dish` = '$selected'
    	";
} 

else 
{
	$find_match ="
	SELECT * 
	FROM `dishes` 
	WHERE `User` = '$Login'
	AND `Dish` = '$selected'
	AND `Weight` = '$selected_W'";
}

$match = mysqli_query($connection, $find_match);


while ($row = mysqli_fetch_array($match)) 
{
        $data["Dish"] = $row['Dish'];
        $data["Prots"] = $row['Prots'];
        $data["Fats"] = $row['Fats'];
        $data["Carbs"] = $row['Carbs'];
        $data["Weight"] = $row['Weight'];
}

	echo json_encode($data);

}

mysqli_close($connection);

 ?>

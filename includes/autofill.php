<?php 

include 'DB_connection.php';

if ( !isset($_POST['selected']) ) {exit();} 


else {


$find_token = " SELECT * FROM `users` 
WHERE `token` = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

	$selected = $_POST['selected'];

$find_match = "SELECT * FROM `dishes` 
WHERE `User` = '$result_token[login]'
AND `Dish` = '$selected' ";

$match = mysqli_query($connection, $find_match);


while ($row = mysqli_fetch_array($match)) {
	
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

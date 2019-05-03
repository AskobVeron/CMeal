<?php

// require 'DB_connection.php';
require 'includes/DB_connection.php';

if ( isset($_POST['save_data1']) ) {

  $errors = array();

  if ( !isset($_COOKIE['token'])) {
    $errors[] = 'Авторизуйтесь';
  }
  if ( empty($_POST['dish_data1'])) {
    $errors[] = 'Введите Название';
  }
  if ( empty($_POST['weight_data1'])) {
    $_POST['weight_data1'] = 100;
  }
  if (strlen($_POST['dish_data1']) > 100) {
    $errors[] = 'Слишком длинное название';
    }

$find_token = " SELECT * FROM `users` 
WHERE token = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);


  $check_dish = "
  SELECT * FROM `dishes` WHERE Dish = '$_POST[dish_data1]'
  AND User = '$result_token[login]' AND Weight = '$_POST[weight_data1]' ";
  $check_dish_query = mysqli_query($connection, $check_dish);

  if (mysqli_num_rows($check_dish_query) != 0) {
        $errors[] = 'Похоже, такая запись уже существует';
    }

  if (empty($errors) == false) {
            echo '<div style="
            margin-top: 10px;
            ">
            <p style="
            font-size: 20px;
            color: #ED2222;
            padding: 2%
            ">'
            . array_shift($errors) .
            '!</p>
            </div>';
        } else {
	        echo '<div style="
	        margin-top: 15px;
	        ">
	        <p style="
	        font-size: 20px;
	        color: green;
	        padding: 2%;  
	        ">
	        Вы успешно добавили ' . $_POST['dish_data1'] . ' :)
	        </p>
	        </div>';

	        // Добавляем

$find_token = " SELECT * FROM `users` 
WHERE token = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

          $User = $result_token['login'];
          $Dish = $_POST['dish_data1'];
          $Prots = $_POST['prots_data1'];
          $Fats = $_POST['fats_data1'];
          $Carbs = $_POST['carbs_data1'];
	        $Weight = $_POST['weight_data1'];

	         $insert_dish_query = "INSERT INTO `dishes` (User, Dish, Prots, Fats, Carbs, Weight) 
	         VALUES ('$User', '$Dish', '$Prots',
	          '$Fats', '$Carbs', '$Weight')";

       mysqli_query($connection, $insert_dish_query);

	}

}

mysqli_close($connection);
?>

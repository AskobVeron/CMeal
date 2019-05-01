<?php

// require 'DB_connection.php';
require 'includes/DB_connection.php';

if ( isset($_POST['save_data1']) ) {

  $errors = array();

  if ( !isset($_COOKIE['login'])) {
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

  $check_dish_query = "
  SELECT * FROM `dishes` WHERE Dish = '$_POST[dish_data1]'
  AND User = '$_COOKIE[login]' AND Weight = '$_POST[weight_data1]' ";
  $check_dish = mysqli_query($connection, $check_dish_query);

  if (mysqli_num_rows($check_dish) != 0) {
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
	        $Weight = $_POST['weight_data1'];
	        $factor = $Weight / 100;
	        $User = $_COOKIE['login'];
	        $Dish = $_POST['dish_data1'];
	        $Prots = $_POST['prots_data1']*$factor;
	        $Fats = $_POST['fats_data1']*$factor;
	        $Carbs = $_POST['carbs_data1']*$factor;
	        $kCal = ($Prots*4 )+($Fats*9)+($Carbs*4);

	         $insert_dish_query = "INSERT INTO `dishes` (User, Dish, Prots, Fats, Carbs, Weight, kCal) 
	         VALUES ('$User', '$Dish', '$Prots',
	          '$Fats', '$Carbs', '$Weight', '$kCal')";

       mysqli_query($connection, $insert_dish_query);

	}

}

mysqli_close($connection);
?>

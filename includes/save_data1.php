<?php

require 'DB_connection.php';

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
  if ( empty($_POST['prots_data1'])) {
    $_POST['prots_data1'] = 0;
  }
  if ( empty($_POST['fats_data1'])) {
    $_POST['fats_data1'] = 0;
  }
  if ( empty($_POST['carbs_data1'])) {
    $_POST['carbs_data1'] = 0;
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
  AND Weight = '$_POST[weight_data1]'
  AND User = '$result_token[login]'";

  $check_dish_query = mysqli_query($connection, $check_dish);

  if (mysqli_num_rows($check_dish_query) != 0) {
        $errors[] = 'Похоже, такая запись уже существует';
    }

        if (isset($_POST['clear'])) {
              echo '';
              exit();
          }
  if (empty($errors) == false) {
            echo '<p style="
            font-size: 20px;
            color: #ED2222;
            padding: 2%
            ">'
            . array_shift($errors) .
            '!</p>';
        } 

        else {
          echo '<p style="
          font-size: 20px;
          color: green;
          padding: 2%;  
          ">
          Вы успешно добавили ' . $_POST['dish_data1'] . ' :)
          </p>';

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

mysqli_close($connection);
?>

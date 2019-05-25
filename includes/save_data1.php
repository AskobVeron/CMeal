<?php

require 'DB_connection.php';

  $errors = array();

  $Dish = mysqli_real_escape_string(
    $connection,
    $_POST['dish_data1']);

  $Weight = $_POST['weight_data1'];

  if ( !isset($_COOKIE['token'])) 
  {
    $errors[] = 'Авторизуйтесь';
  }

  if ( empty($Dish) ) 
  {
    $errors[] = 'Введите Название';
  }

  if ( empty($_POST['weight_data1']))
  {
    $_POST['weight_data1'] = 100;
  }

  if ( empty($_POST['prots_data1'])) 
  {
    $_POST['prots_data1'] = 0;
  }

  if ( empty($_POST['fats_data1'])) 
  {
    $_POST['fats_data1'] = 0;
  }

  if ( empty($_POST['carbs_data1'])) 
  {
    $_POST['carbs_data1'] = 0;
  }

  if (strlen($_POST['dish_data1']) > 100) 
  {
    $errors[] = 'Слишком длинное название';
  }

$token = $_COOKIE['token'];

$find_token =" 
SELECT * 
FROM `users` 
WHERE token = '$token' 
";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

$Login = $result_token['login'];

  $check_dish ="
  SELECT * 
  FROM `dishes` 
  WHERE Dish = '$Dish'
  AND User = '$Login'
  AND Weight = '$Weight'
  ";

  $check_dish_query = mysqli_query($connection, $check_dish);

  if (mysqli_num_rows($check_dish_query) != 0) 
  {
        $errors[] = 'Похоже, такая запись уже существует';
  }

        if (isset($_POST['clear'])) 
        {
              echo '';
              exit();
        }
  if (empty($errors) == false) 
  {
            echo '<p style="
            font-size: 20px;
            color: #ED2222;
            margin: 15px
            ">'
            . array_shift($errors) .
            '!</p>';
  } 

        else 
        {
          echo '<p style="
          font-size: 20px;
          color: green;
          margin: 15px  
          ">
          Вы успешно добавили ' 
          . $_POST['dish_data1'] . 
          ' :)
          </p>';

          // Добавляем

$find_token = " SELECT * FROM `users` 
WHERE token = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

          $User = $result_token['login'];
          $Dish = $Dish;
          $Prots = $_POST['prots_data1'];
          $Fats = $_POST['fats_data1'];
          $Carbs = $_POST['carbs_data1'];
          $Weight = $_POST['weight_data1'];

          $insert_dish_query ="
           INSERT INTO
            `dishes` 
              (User, 
              Dish, 
              Prots, 
              Fats, 
              Carbs, 
              Weight) 
           VALUES 
           ('$User', 
            '$Dish', 
            '$Prots',
            '$Fats', 
            '$Carbs', 
            '$Weight')
            ";

       mysqli_query($connection, $insert_dish_query);

        }

mysqli_close($connection);
?>

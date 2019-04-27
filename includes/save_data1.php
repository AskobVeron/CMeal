<?php
require_once ('config.php');
include ('DB_connection.php');

$GLOBALS['User'] = 'Askob';

if ( 
	isset($GLOBALS['User']) && 
	isset($_POST['dish_data1']) && 
	isset($_POST['weight_data1']))
  {
    $sql_query = 
    "INSERT INTO $db_connection[database_name] (User, Dish, Prots, Fats, Carbs, Weight)
     VALUES (
         '$GLOBALS[User]',
         '$_POST[dish_data1]', 
         '$_POST[prots_data1]', 
         '$_POST[fats_data1]', 
         '$_POST[carbs_data1]', 
         '$_POST[weight_data1]')"; 
    
  }
    if (mysqli_query($connection, $sql_query) == false) {     
        	echo 'Oops... It seems like this record is already exists :(';
      } else {
        echo 'New record has been successfully created :)';
      }
mysqli_close($connection);
?>

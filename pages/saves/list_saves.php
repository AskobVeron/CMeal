<?php 
require 'includes/DB_connection.php';

$find_token = " SELECT * FROM `users` 
WHERE token = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);


$find_dish = "SELECT * FROM `dishes` 
WHERE User = '$result_token[login]'";

$result = mysqli_query($connection, $find_dish);

if($result == true) {
    echo '<table class="table table-striped">
    <div style="text-align:center" class="alert alert-primary" role="alert">
  Что бы увидеть изменения, обновите страницу
</div>';

    while ($column = mysqli_fetch_row($result)) {

        $Weight = $column[6];
        $factor = $Weight / 100;
        $User = $result_token['login'];
        $Dish = $column[2];
        $Prots = $column[3]*$factor;
        $Fats = $column[4]*$factor;
        $Carbs = $column[5]*$factor;
        $kCal = ($Prots*4)+($Fats*9)+($Carbs*4);

        echo '<tr>
        <td style = "
         text-align:center;
         font-weight: 400;
         ">'
         . $Dish . 
         '</td>
         </tr>
            <tr>
            <td style="text-align:center">
            Белки: ' . $Prots . ' <br>
            Жири: ' . $Fats . ' <br>
            Углеводы: ' . $Carbs . ' <br><strong>
            Вес: ' . $Weight . 'гр</strong> <br>
            кКал: ' . $kCal . ' <br>
            </td>
            </tr>
         ';
    }
    echo "</table>";
}
mysqli_close($connection);

?>


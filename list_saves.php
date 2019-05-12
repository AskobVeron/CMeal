<?php 
require 'includes/DB_connection.php';

$find_token = " SELECT * FROM `users` 
WHERE `token` = '$_COOKIE[token]' ";

$find_token_query = mysqli_query($connection, $find_token);
$result_token = mysqli_fetch_assoc($find_token_query);

if(!isset($_POST['search'])) {

$find_dish = "SELECT * FROM `dishes` 
WHERE `User` = '$result_token[login]' ORDER BY `id` DESC ";

$result = mysqli_query($connection, $find_dish);

}

elseif (isset($_POST['search'])) {

 $search_query = trim(strip_tags(stripcslashes(
    htmlspecialchars($_POST["search"])))
);

$find_dish = "SELECT * FROM `dishes` 
WHERE `User` = '$result_token[login]' 
AND `Dish` LIKE '%$search_query%' ORDER BY `id` DESC ";

$result = mysqli_query($connection, $find_dish);
echo "<div id='response>'";

} else {

    exit();

}

?>

<?php
echo "<div style='margin-top: -30px;' id='response'>";

    while ($column = mysqli_fetch_row($result)) {

        $Weight = $column[6];
        $factor = $Weight / 100;
        $User = $result_token['login'];
        $Dish = $column[2];
        $Prots = $column[3]*$factor;
        $Fats = $column[4]*$factor;
        $Carbs = $column[5]*$factor;
        $kCal_total = ($Prots*4)+($Fats*9)+($Carbs*4);
        $kCal_100g = ($column[3]*4)+($column[4]*9)+($column[5]*4);


    if ($Weight != 100) {

            echo '<table class="table table-striped">
            <tr>
            <td class="delete_name" style = "
             text-align:center;
             font-weight: 400;
             ">
             <span class="'. $Dish .'">'. $Dish .'</span>
         <a name="delete"  class="'. $Dish .'" style=" color:#CC0C0C;
         cursor: pointer;
         float: right;
         margin-right: 2%;
         font-weight:bold;
         font-size: 18px;">X</a>
             </td>
             </tr>
                <tr>
                <td style="text-align:center">
                Белки: ' . round($Prots) . ' (' . $column[3] . ')<br>
                Жири: ' . round($Fats) . ' (' . $column[4] . ')<br>
                Углеводы: ' . round($Carbs) . ' (' . $column[5] . ')<br><strong>
                Вес: ' . round($Weight) . 'гр</strong> <br>
                кКал: ' . round($kCal_total) . ' (' . $kCal_100g . ')<br>
                </td>
                </tr>
                </table>';
        }
    else    {

         echo '<table class="table table-striped">
            <tr>
            <td class="delete_name" style = "
             text-align:center;
             font-weight: 400;
             "><span class="'. $Dish .'">'. $Dish . '</span>
         <a name="delete"  class="'. $Dish .'" style=" color:#CC0C0C;
         cursor: pointer;
         float: right;
         margin-right: 2%;
         font-weight:bold;
         font-size: 18px;">X</a>
             </td>
             </tr>
            <tr margin-left: -2%;>
            <td style="text-align:center">
            Белки: ' . round($Prots) . ' <br>
            Жири: ' . round($Fats) . ' <br>
            Углеводы: ' . round($Carbs) . ' <br><strong>
            Вес: ' . round($Weight) . 'гр</strong> <br>
            кКал: ' . round($kCal_100g) . ' <br>
            </td>
            </tr>
            </table>';

        }
    }

echo "</div>";

if (isset($_POST['delete'])) {

$delete_dish = " DELETE FROM `dishes` 
WHERE `User` = '$result_token[login]' AND `Dish` = '$_POST[delete]' ";

$delete_dish_query = mysqli_query($connection, $delete_dish);

}

mysqli_close($connection);
?>



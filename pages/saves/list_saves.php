<?php 
require 'includes/DB_connection.php';

$query = "SELECT * FROM `dishes` 
WHERE User = '$_COOKIE[login]'";
 
$result = mysqli_query($connection, $query); 

if($result == true) {
    echo '<table class="table table-striped">
    <div style="text-align:center" class="alert alert-primary" role="alert">
  Что бы увидеть обновления, обновите страницу
</div>
    ';
    while ($column = mysqli_fetch_row($result)) {
        echo '<tr>
        <td style = "
         text-align:center;
         font-weight: 400;
         ">'
         . $column[2] . 
         '</td>
         </tr>
            <tr>
            <td style="text-align:center">
            Белки: ' . $column[3]  . ' <br>
            Жири: ' . $column[4]  . ' <br>
            Углеводы: ' . $column[5]  . ' <br><strong>
            Вес: ' . $column[6]  . 'гр</strong> <br>
            кКал: ' . $column[7]  . ' <br>
            </td>
            </tr>
         ';
    }
    echo "</table>";
}
mysqli_close($connection);

?>


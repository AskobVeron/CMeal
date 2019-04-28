<?php 
include ('includes/DB_connection.php');

$query = "SELECT * FROM $db_connection[database_name]";
 
$result = mysqli_query($connection, $query) 
or exit("Ошибка: " . mysqli_error($connection)); 

if($result == true)
{
    echo "<table class='table table-striped'>";
    while ($column = mysqli_fetch_row($result)) {
        echo "<tr>
        <td style = '
         text-align:center;
         font-weight: 400;
         '>".
         $column[2]
         ."</td>
         </tr>";
    }
    echo "</table>";
}
mysqli_close($connection);

?>


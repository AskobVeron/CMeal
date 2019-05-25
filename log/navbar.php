<?php 
include '../includes/DB_connection.php';
 ?>
<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark menu">
            <div class="container-fluid">
                <div id="triple-top">
                    <button class="navbar-toggler" id="submenu_toggle" type="button"><span class="navbar-toggler-icon"></span></button><?php

include '../includes/DB_connection.php';

$token = $_COOKIE['token'];

$check_user ="
SELECT * 
FROM `users`
WHERE `token` = '$token' 
";

$check_user_query = mysqli_query($connection, $check_user);
$row = mysqli_fetch_assoc($check_user_query);

if (isset($row['token'])) 
{
    echo '
    <a href="/" style="
        margin-left: 10px" 
    id="nav_crmeal" class="brand acc_tab">' 

    . $row['login'] .

    '</a>'; 
}

                  ?><div id="submenu">
                        <ul>
                            <li class="navbarli"><?php 
                            
if (isset($_COOKIE['token'])) 
{
echo '<a id="exit" 
href="../pages/login/exit.php" 
class="">
    Выход
</a>';
}
                        ?></li>
                        </ul>
                    </div>
                </div><?php 

if (!isset($_COOKIE['token']))
{
echo '<a class="acc_tab" 
href="../pages/login/">
    Вход
</a>';
}
    ?></div>
        </nav>
    </header>
    <script src="../lib/jQuery/jquery-3.3.1.js" type="text/javascript">
    </script> 
    <script>
$('#submenu_toggle').on('click', 
function() 
{
    $("#submenu").toggle();
})
    </script>

</body>
</html>

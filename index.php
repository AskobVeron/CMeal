<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="U79wNeLag2vPIWpgdBv1OHEBSTlHkuKk5nM4SCXMTjI" name="google-site-verification">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>CMeal</title>
</head>

<body>
<?php include 'includes/DB_connection.php';
    $hacker_check = "SELECT * FROM `users` 
    WHERE token = '$_COOKIE[token]'";
    $hacker_check_query = 
    mysqli_query($connection, $hacker_check);
    $errors = array();
    if (mysqli_num_rows($hacker_check_query) == 0) {
    $errors[] = ' Пошел вон, хакер грязный';} 
    if (!isset($_COOKIE['token'])) {
    $errors = array();} 
    if (empty($errors) == false) {
    echo '
    <style>
    body {background-image: url("img/Death.jpg");}
    #btn_sorry:hover{background-color: yellow;}
    .sorrys{margin-left: 2%;}
    </style>
    <div align="center" style="
    margin-top: 15%;" 
    class="alert alert-danger" 
    role="alert">
    <p style="
    font-size: 60px;
    color: red;
    padding: 2%">'
    . array_shift($errors) .
    '!</p>
    </div>
    <form action="/pages/login/exit.php" method="POST"
    <a class="sorrys" href="pages/login/exit.php" class="">
    <button class="sorrys" id="btn_sorry" style="
    font-size: 20px;
    font-weight: bold;
    width: 90%;"  
    type="submit">
    Я все понял и каюсь, прости меня, добрый программист
    </button></a>
    </form>';
    exit();}?><header>
        <nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark menu">
            <div class="container-fluid">
                <div id="triple-top">
                    <button class="navbar-toggler" id="submenu_toggle" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button><?php

include 'includes/DB_connection.php';

$check_user = "SELECT * FROM `users`
WHERE `token` = '$_COOKIE[token]'";
$check_user_query = mysqli_query($connection, $check_user);
$row = mysqli_fetch_assoc($check_user_query);

if (isset($row['token'])) 
{
echo 
'<a href="/" style="
margin-left: 10px;"
 id="nav_crmeal" class="brand acc_tab">' 
. $row['login'] .
'</a>';
echo '<a style="
margin-left: 10px;
class="a_nav_tab" href="#" id="nav_history" href="#">История</a><br>';
} else
{
echo '<a class="a_nav_tab brand" href="#" id="nav_crmeal">CMeal</a>';
}
?><div id="submenu">
                        <ul>
                            <li class="under_menu"><?php 

if (isset($_COOKIE['token']))
{
echo 
'<a class="navbarli under_menu" href="#" id="nav_saves">Сохранения</a><br>';
}
?></li>
                            <li class="navbarli under_menu">
                                <a href="#" id="nav_versions" style="font-size: 14.5px;" target="blank">Версии</a>

                            </li>


                            <li class="navbarli under_menu"><?php 

if (isset($_COOKIE['token']))
{
 echo '<a id="exit" href="pages/login/exit.php" class="">Выход</a>';
}
?></li>
                        </ul>
                    </div>
                </div><?php 

if (!isset($_COOKIE['token'])) 
{
 echo '<a class="acc_tab" href="pages/login/">Вход</a>';
}

?></div>
        </nav>
    </header>
    <br>


    <div id="saves">
        <div class="alert alert-primary" role="alert" style="text-align:center">
            Здесь хранятся ваши сохраненные продукты
        </div>
        <input aria-label="Search" class="form-control_search" id="search" name="search" placeholder="Начните ввод..." type="text">

        <div id="black">
        </div>


        <div id="confirm">
            <h4>Вы уверены, что хотите удалить этот продукт?</h4>

            <hr>
            <button class="btn btn-outline-danger confirm-btn" id="no">Отмена</button> <button class="btn btn-outline-success confirm-btn" id="yes">Да</button>
        </div>
<?php 
             include('list_saves.php');
?></div>


    <div id="versions">
<?php 
                include('pages/versions/versions.php')
?></div>
    <div id="history">
<?php 
                include('pages/history/history.php')
?></div>


    <div id="body">
        <table class="table">
            <thead>
                <tr>
                    <th class="dish_name_trsl" id="name_dish_data1">Продукт</th>

                    <th colspan="2">
                        <input class="non_button" id="dish_data1" name="dish_data1" type="text">

                        <ul id="search_result">
                        </ul>
                    </th>
                </tr>
            </thead>
        </table>


        <table class="table">
            <tr>
                <td align="center" class="prots_trsl">Белки</td>

                <td><input class="non_button inputs_data1" id="id_proteins_data1" name="prots_data1" type="number">
                </td>

                <td>
                    <p class="totals">total: <output id="proteins_data1_res"></output></p>
                </td>
            </tr>


            <tr>
                <td align="center" class="fats_trsl">Жиры</td>

                <td><input class="non_button inputs_data1" id="id_fats_data1" name="fats_data1" type="number">
                </td>

                <td>
                    <p class="totals">total: <output id="fats_data1_res"></output></p>
                </td>
            </tr>


            <tr>
                <td align="center" class="carbs_trsl">Углеводы</td>

                <td><input class="non_button inputs_data1" id="id_carbs_data1" name="carbs_data1" type="number">
                </td>

                <td>
                    <p class="totals">total: <output id="carbs_data1_res"></output></p>
                </td>
            </tr>


            <tr>
                <td align="center" class="weight_trsl">Вес(г)</td>

                <td><input class="non_button inputs_data1" id="id_weight_data1" name="weight_data1" type="number">
                </td>

                <td>
                    <p class="totals">kCal: <output id="ccal_data1_res"></output></p>
                </td>
            </tr>
        </table>
        <button class="btn btn-outline-dark data1_buttons" id="id_clear_data1_res" name="clear">Очистить</button> <button class="btn btn-outline-primary save_buttons data1_buttons" id="id_save_data1" name=
        "save_data1" type="submit" value="Сохранить ↑↑">Сохранить ↑↑</button> <button class="btn btn-outline-success data1_buttons" id="id_add_ingridient">Добавить</button>
        <div id="save_response">
        </div>

        <hr>
        <button class="btn btn-outline-dark data2_buttons" id="del_last_data2_res">Отменить</button> <button class="btn btn-outline-primary save_buttons data2_buttons" id="id_save_data2" name="save_data2"
        type="submit" value="Сохранить ↑↑">Сохранить ↓↓</button> <button class="btn btn-outline-danger data2_buttons" id="clear_all_data2">Очистить всё</button>
         <button class="btn btn-outline-info" id="id_add_history">В Историю</button>


        <div class="table-responsive">
            <table class="table" id="data2">
                <thead class="thead-dark">
                    <tr id="head_data2">
                        <th id="num_trsl">№</th>

                        <th class="dish_name_trsl">Продукт</th>

                        <th class="prots_trsl">Белки</th>

                        <th class="fats_trsl">Жиры</th>

                        <th class="carbs_trsl">Углеводы</th>

                        <th class="weight_trsl">Вес(г)</th>

                        <th class="ccal_trsl">кКал</th>
                    </tr>


                    <tr class="table-primary" id="total_data2">
                        <td id="result_trsl">Всего</td>

                        <td><input id="res_name_create" type="text">
                        </td>

                        <td><output class="td_total_data2" id="prot_total_data2_res">0</output>
                        </td>

                        <td><output class="td_total_data2" id="fats_total_data2_res">0</output>
                        </td>

                        <td><output class="td_total_data2" id="carbs_total_data2_res">0</output>
                        </td>

                        <td><output class="td_total_data2" id="weight_total_data2_res">0</output>
                        </td>

                        <td><output class="td_total_data2" id="ccal_total_data2_res">0</output>
                        </td>
                    </tr>


                    <tr class="table-success">
                        <td id="in100_trsl">На 100гр</td>

                        <td>
                            <p id="res_100">
                            </p>
                        </td>

                        <td class="total100_data2"><output id="prot100_total_data2_res">0</output>
                        </td>

                        <td class="total100_data2"><output id="fats100_total_data2_res">0</output>
                        </td>

                        <td class="total100_data2"><output id="carbs100_total_data2_res">0</output>
                        </td>

                        <td class="total100_data2"><output id="weight100_total_data2_res">0</output>
                        </td>

                        <td class="total100_data2"><output id="ccal100_total_data2_res">0</output>
                        </td>
                    </tr>
                </thead>


                <tbody id="data2_body">
                </tbody>
            </table>
        </div>
    </div>
    <script src="lib/jQuery/jquery-3.3.1.js" type="text/javascript">
    </script> 
    <script src="script/script.js" type="text/javascript">
    </script>
</body>
</html>

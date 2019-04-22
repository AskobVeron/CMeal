<?php include('includes/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <title>CMeal</title>
</head>

<body>
    <header>
<nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark menu">
            <div class="container-fluid">
                <div>
                    <a class="a_nav_tab brand" href="/" id="nav_crmeal">CMeal</a> 
                    <a class="a_nav_tab" href="pages/saves/" target="blank" id="nav_saves">Сохранения</a> 
                    <button class="navbar-toggler" id="submenu_toggle" type="button"><span class="navbar-toggler-icon"></span></button>
                    <div id="submenu">
                        <ul>
                            <li class="navbarli">
                                <a id="nav_versions" class="under_menu" target="blank" href="pages/versions/">Версии</a>
                            </li>
                            <li class="navbarli">
                                <a class="under_menu" href="#" id="languages_list">Выбрать язык</a>
                            </li>
                            <li style="list-style: none; display: inline">
                                <ul>
                                    <li class="navbarli">
                                        <a class="under2_menu" href="#" id="English">Английский</a>
                                    </li>
                                    <li class="navbarli">
                                        <a class="under2_menu" href="#" id="Russian">Русский</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div id="body">
        <table class="table">
            <thead>
                <tr>
                    <th class="dish_name_trsl">Продукт</th>
                    <th colspan="2"><input id="dish_data1" type="text">
                    </th>
                </tr>
            </thead>
        </table>
        <table class="table">
            <tr>
                <td align="center" class="prots_trsl">Белки</td>
                <td><input class="non_button inputs_data1" id="id_proteins_data1" name="prots-data1" type="number">
                </td>
                <td>
                    <p class="totals">total: <output id="proteins_data1_res"></output></p>
                </td>
            </tr>
            <tr>
                <td align="center" class="fats_trsl">Жиры</td>
                <td><input class="non_button inputs_data1" id="id_fats_data1" name="prots-data1" type="number">
                </td>
                <td>
                    <p class="totals">total: <output id="fats_data1_res"></output></p>
                </td>
            </tr>
            <tr>
                <td align="center" class="carbs_trsl">Углеводы</td>
                <td><input class="non_button inputs_data1" id="id_carbs_data1" name="prots-data1" type="number">
                </td>
                <td>
                    <p class="totals">total: <output id="carbs_data1_res"></output></p>
                </td>
            </tr>
            <tr>
                <td align="center" class="weight_trsl">Вес(г)</td>
                <td><input class="non_button inputs_data1" id="id_weight_data1" type="number">
                </td>
                <td>
                    <p class="totals">kCal: <output id="ccal_data1_res"></output></p>
                </td>
            </tr>
        </table>
        <input class="btn btn-outline-primary data1_buttons" id="id_save_data1" type="submit" value="Сохранить ↑↑"> <input class="btn btn-outline-success data1_buttons" id="id_add_ingridient" type="submit" value="Добавить"><br>
        <input class="btn btn-outline-dark data1_buttons" id="id_clear_data1_res" type="submit" value="Очистить">
        <hr>
        <input class="btn btn-outline-secondary data2_buttons" id="del_last_data2_res" type="submit" value="Отменить"> <input class="btn btn-outline-danger data2_buttons" id="clear_all_data2" type="submit" value="Очистить всё"> <input class="btn btn-outline-primary data2_buttons" id="id_save_data2" type="submit" value="Сохранить ↓↓">
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
    <script src="script/jquery-3.3.1.js" type="text/javascript">
    </script>
    <script src="script/script.js" type="text/javascript">
    </script>
</body>

</html>
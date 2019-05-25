<?php 
require '../../includes/DB_connection.php';

if ( !isset($_COOKIE['key']) ) 
{
    if ( isset($_POST['submit']) ) 
    {

        $login = mysqli_real_escape_string(
            $connection,
             trim($_POST['User']));
        $password  = mysqli_real_escape_string(
            $connection,
             trim($_POST['log_password']));

        $errors = array();

        if (empty($_POST['User'])) {
            $errors[] = 'Введите логин';
        }
        if (empty($_POST['log_password'])) {
            $errors[] = 'Введите пароль';
        }

        $check_matches =" 
        SELECT *
        FROM `users` 
        WHERE login = '$login' 
        AND password  = md5('$password') 
        ";

        $check_matches_query = mysqli_query($connection, $check_matches);

        if ( mysqli_num_rows($check_matches_query) == 0 ) 
        {
            $errors[] = 'Неправильно введен логин или пароль';
        }

        else 
        {

            //Авторизуем

            $info = mysqli_fetch_assoc($check_matches_query);

    setcookie("token", $info['token'], time()+86400, '/');

            $home_url = 'http://' . $_SERVER['HTTP_HOST'];
            header('location: ' . $home_url);


        }
    }

}

 ?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <script src="../../lib/jQuery/jquery-3.3.1.js" type="text/javascript">
    </script>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="../../lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>CMeal</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark menu">
            <div class="container-fluid">
                <div>
                    <button class="navbar-toggler" id="submenu_toggle" type="button"><span class="navbar-toggler-icon"></span></button> <a class="a_nav_tab brand" href="/" id="Home">CMeal</a>

                    <div id="submenu">
                        <ul>
                            <li class="navbarli">
                                <a class="a_nav_tab" href="/" id="Home">На главную</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <form action="../login/" align="center" id="first-row" method="post" name="first-row">
        <div align="center" id="sign_block">
            <div class="form-group">
                <label>Логин</label> <input class="form-control" name="User" placeholder="Логин" type="text" value="<?php echo $_POST['User'] ?>">
            </div>


            <div class="form-group">
                <label>Пароль</label> <input class="form-control" name="log_password" placeholder="Пароль" type="password">
            </div>
            <button class="btn btn-outline-success" id="enter" name="submit" type="submit">Войти</button> <a href="../sign_up" id="reg">Регестрация</a>
        </div>


        <div align="center">
            <?php 

                    if (empty($errors) == false) {
                        echo '<div style="
                        margin-top: 10px;
                        ">
                        <p style="
                        font-size: 20px;
                        color: red;
                        padding: 2%
                        ">'
                        . array_shift($errors) .
                        '!</p>
                        </div>';
                    }
            ?>
        </div>
    </form>
    <script src="../../script/script.js" type="text/javascript">
    </script>
</body>
</html>

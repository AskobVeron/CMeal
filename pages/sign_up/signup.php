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
                    <button class="navbar-toggler" id="submenu_toggle" type="button"><span class="navbar-toggler-icon"></span></button>
                    <a class="a_nav_tab brand" id="Home" href="/">На главную</a>
                    <div id="submenu">
                        <ul>
                            <li class="navbarli">
                                <a class="under_menu" href="#" id="languages_list">Выбрать язык</a>
                            </li>
                            <li class="navbarli">
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
                <a id="login" href="../login">Войти</a>
            </div>
        </nav>
</header>

<form id="first-row" action="../sign_up/" method="POST">
    <div id="sign_block" align="center">
  <div class="form-group">

    <label>Логин</label>
    <input type="text" name="login" class="form-control" placeholder="Логин" value="<?php echo $_POST['login'] ?>">

    <label id="exampleInputEmail2">E-mail</label>
    <input type="text" name="email" class="form-control" 
    placeholder="E-mail" value="<?php echo $_POST['email'] ?>">

  </div>

  <div class="form-group">

    <label>Пароль</label>
    <input id="password" name="password" type="password" class="form-control password" placeholder="Пароль">

    <input type="password" name="password2" class="form-control password" placeholder="Введите пароль еще раз">

  </div>

  <button type="submit" name="submit" id="regestration" class="btn btn-outline-primary">Зарегестрироваться</button>
</div>

    <div align="center">
    <?php 
require  '../../includes/DB_connection.php';

if (isset($_POST['submit'])) {

$errors = array();

    if ($_POST['login'] == '') {
    $errors[] = 'Введите Логин';
    }

    if (strlen($_POST['login']) > 30) {
    $errors[] = 'Логин слишком длинный';
    }

    if (strlen($_POST['email']) > 49) {
    $errors[] = 'E-mail слишком длинный <br>
                 Максимальная длина 49 символов';
    }

    if ($_POST['email'] == '') {
    $errors[] = 'Введите E-mail';
    }

    if ($_POST['password'] == '') {
    $errors[] = 'Введите пароль';
    }

    if (strlen($_POST['password']) < 8) {
    $errors[] = 'Пароль должен быть минимум 8 символов';
    }

    if (strlen($_POST['password']) > 19) {
    $errors[] = 'Пароль слишком длинный <br>
                Максимальная длина пароля 19 символов';
    }

    if ($_POST['password2'] != $_POST['password']) {
    $errors[] = 'Пароли должны совпадать';
    }


    $check_login_query = "SELECT * FROM `users` WHERE login = '$_POST[login]'";
    $check_login = mysqli_query($connection, $check_login_query);
    
    if (mysqli_num_rows($check_login) != 0) {
        $errors[] = 'Пользователь с таким логином уже существует';
    }

    $check_email_query = "SELECT * FROM `users` WHERE email = '$_POST[email]'";
    $check_email = mysqli_query($connection, $check_email_query);

    if (mysqli_num_rows($check_email) != 0) {
        $errors[] = 'Пользователь с таким E-mail уже существует';
    }

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
    } else {
         echo '<div style="
        margin-top: 15px;
        ">
        <p style="
        font-size: 20px;
        color: green;
        padding: 2%;  
        ">
        Регестрация успешно завершена, ' . $_POST['login'] . ' :)
        </p>
        </div>';

        // Регестрируем 

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

       $insert_query = "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$password')";
       mysqli_query($connection, $insert_query);
       mysqli_close($connection);
       exit();

    }

}

?>
</div>

</form>

<script type="text/javascript" src="script/script.js"></script>
</body>
</html>

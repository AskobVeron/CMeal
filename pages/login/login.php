<?php 
require '../../includes/DB_connection.php';
if (!isset($_COOKIE['login'])) {
    if (isset($_POST['submit'])) {

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

        $check_matches_query = "SELECT `id`, `login` FROM `users` 
            WHERE login = '$login' AND password  = '$password'";
        $check_matches = mysqli_query($connection, $check_matches_query);

        if (mysqli_num_rows($check_matches) == 0) {
            $errors[] = 'Неправильно введен логин или пароль';
        }

 else {

            //Авторизуем

            $info = mysqli_fetch_assoc($check_matches);

            setcookie("login", $info['login'], time()+86400, '/');
            setcookie("id", $info['id'], time()+86400, '/');

            $home_url = 'http://' . $_SERVER['HTTP_HOST'];
            header('location: ' . $home_url);


        }
    }

}

 ?>

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
                                <a id="acc_tab" href="../sign_up">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
</header>
<form id="first-row" align="center" action="../login/" method="POST">
<div id="sign_block" align="center">
  <div class="form-group">
    <label>Логин</label>
    <input value="<?php echo $_POST['User'] ?>" type="text" name="User" class="form-control" placeholder="Логин">
  </div>
  <div class="form-group">
    <label>Пароль</label>
    <input type="password" name="log_password" class="form-control" placeholder="Пароль">
  </div>
  <button type="submit" name="submit" class="btn btn-outline-success" id="enter">Войти</button>
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
<script type="text/javascript" src="script/script.js"></script>
</body>
</html>

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
                <a id="sign_up" href="../sign_up">Зарегистрироваться</a>
            </div>
        </nav>
</header>
<form id="first-row" align="center" action="../../includes/verify_user.php" method="POST">
<div id="sign_block" align="center">
  <div class="form-group">
    <label for="exampleInputEmail1">Логин</label>
    <input type="text" name="User" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input type="password" name="log_password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
  </div>
  <button type="submit" class="btn btn-outline-success" id="enter">Войти</button>
</div>
</form>
<script type="text/javascript" src="script/script.js"></script>
</body>
</html>

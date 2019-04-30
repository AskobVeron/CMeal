<?php 
unset($_COOKIE['login']);
unset($_COOKIE['id']);
setcookie('id', '', -3600, '/');
setcookie('login', '', -3600, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('location: ' . $home_url);
 ?>

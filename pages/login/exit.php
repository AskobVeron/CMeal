<?php 

unset($_COOKIE['token']);
setcookie('token', '', -3600, '/');

$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('location: ' . $home_url);

?>

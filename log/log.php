<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

	<title>log</title>
</head>
<body>

<?php include '../includes/DB_connection.php';
if ($_COOKIE['token'] != 
'4b211b670a3db2225cdd7cfc5cd624f2') {
$errors[] = ' Пошел вон, хакер грязный';} 
if (!isset($_COOKIE['token'])) {
$errors[] = ' Пошел вон, хакер грязный';} 
if (empty($errors) == false) {
echo '
<style>
body {background-image: url("../img/Death.jpg");}
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
<form action="/" method="POST"
<a class="sorrys" href="/" class="">
<button class="sorrys" id="btn_sorry" style="
font-size: 20px;
font-weight: bold;
width: 90%;"  
type="submit">
Я все понял и каюсь, прости меня, добрый программист
</button></a>
</form>';
exit();}?>

	<header>
		<?php 
		include 'navbar.php';
		 ?>
	</header>
<table style="margin-top: 55px;" class="table table-striped">

<tr style="text-align: center;">
<td>login: <strong>Наташа</strong><br>
email: Tajjga787@ukr.net<br>
password: tajjgaoop<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>AskobVeron</strong><br>
email: twistedzing@gmail.com<br>
password: fbrqwe00<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>Asetsky</strong><br>
email: asetsky2018@gmail.com<br>
password: 03072002<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>TiLOX</strong><br>
email: oksanayaroshenko1980@gmail.com<br>
password: hjvtjj1324<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>holidayman</strong><br>
email: sosichlen@sosi.hui<br>
password: 12345678<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>Kochka_</strong><br>
email: saimonklark@gmail.com<br>
password: BVB09BVB09<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>nikita_lenov</strong><br>
email: hdjdjxjdh@hshdjd.com<br>
password: kokoko222<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>Ser Bob</strong><br>
email: djtourist11@gmail.com<br>
password: 1234567890<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>gerasickin19</strong><br>
email: gerasickinviktor@gmail.com<br>wizard1973456<br></td>
</tr>

<tr style="text-align: center;">
<td>login: <strong>Debiljaka</strong><br>
email: huisos@gmail.com<br>
password: 12345687<br></td>
</tr>



<tr style="text-align: center;">
<td>login: <strong>NE Jugyl</strong><br>
email: 31012018kh@gmail.com<br>
password: Qwerty123<br></td>
</tr>

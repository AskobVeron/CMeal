<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../style/style.css" rel="stylesheet" type="text/css">

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
	</header><table class="table table-striped" style="margin-top: 55px;">


<tr style="text-align: center;">
		<td>login: <strong>gerasickin19</strong><br>
email: gerasickinviktor@gmail.com<br>
wizard1973456<br></td>
		</tr>

<tr style="text-align: center;">
            <td>login: <strong>PASHKXVSKYI</strong><br>
email: egor.pashkovskyi602@gmail.com<br>
password: 123Vetal4mo<br></td>
            </tr>

<tr style="text-align: center;">
            <td>login: <strong>privet</strong><br>
email: max.shuldiner777@gmail.com<br>
password: privet228<br></td>
            </tr>

<tr style="text-align: center;">
            <td>login: <strong>Vlados</strong><br>
email: vlad.fedorkin03@gmail.com<br>
password: 0000000000<br></td>
            </tr>

<?php
include "databas1.php";
include "databas2.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset=UTF-8">
	<link rel="stylesheet" href="style_pannel.css" type="text/css" />
	<title>Режим администратора</title>

</head>
<div class="header">
		<div class = "title">Режим администратора</div>
		<br>
		<div class = "menu" >

		<a href ="smen_pass.php" "#" class="knopka" style="margin-right">Сменить пароль</a>
		<a href ="index.php" "#" class="knopka" style="margin-right">Выйти</a>
		</div>
</div>
<div class="content"></div>
<div class="container-fluid">
<body>
<body background="f1.jpg">
<form action="fun_red_n.php" method="post">
<br><br>
<table width="400" alight=center>
<tr>
</tr>
<tr>
  <td alight=center>
	<p>Название мерча, который хотите отредактировать</p>
		<input name="name_m" type="text"><p></p>
<h1>Редактировать запись каталога</h1>
<p>Фото (адрес)</p>
		<input name="newimg_m" type="text">
	<p>Название</p>
		<textarea name="newname_m" type="text"></textarea>
	<p>Цена</p>
		<input name="newcena_m" type="text"><p></p>
<input type="submit" value="Сохранить изменения">
	</td>
</tr>
</body>
</html>
<?php
include "databas1.php";
include "databas2.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style_pannel.css" type="text/css" />
<title>Режим администратора</title>
<meta charset="utf-8">
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
<body>
<body background="f1.jpg">
<form action="newsred.php" method="post">
<br><br>
<table width="400" alight=center>
<tr>
</tr>
<tr>
  <td alight=center>
<h1>Добавить новость</h1>
	<p>Название:</p>
		 <textarea name="name_n" ></textarea>
	<p>Фото (адрес):</p>
		<input name="img_n" type="text">
	<p>Текст:</p>
		 <textarea name="text_n" ></textarea>
	<p>Дата:</p>
		<input name="data_n" type="text"><p></p>
<input type="submit" value="Добавить новость">
	</td>
</tr>
</body>
</html>
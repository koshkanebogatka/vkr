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
<div class="container-fluid"></div>
<body>
<body background="f1.jpg">
<form action="funrednew.php" method="post">
<br><br>
<table width="400" alight=center>
<tr>
</tr>
<tr>
  <td alight=center>
  <h1>Найти новость</h1>
		 <p>Введите название новости, которую хотите отредактировать</p>
		 <textarea name="name_n" type="text"></textarea>
<h1>Редактировать новость</h1>
	<p>Название:</p>
		 <textarea name="newname_n"></textarea>
	<p>Фото (адрес):</p>
		<input name="newimg_n" type="text">
	<p>Текст:</p>
		 <textarea name="newtext_n"></textarea>
	<p>Дата:</p>
		<input name="newdata_n" type="text"><p></p>
<input type="submit" value="Сохранить изменения">
	</td>
</tr>

</div>
</body>
</html>
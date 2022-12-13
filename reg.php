<?php
include "databas1.php";
include "databas2.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style_admin.css" type="text/css" />
		<script src="script1.js" defer></script>
		<script src="script2.js" defer></script>
<title>Страница авторизации</title>
<meta charset="utf-8">
</head>
<nav> 
<a href = "index.php" "#" class="menu">О группе</a> |
<a href = "Новости.php" "#" class="menu">Новости</a> |
<a href = "Каталог билетов.php" "#" class="menu">Каталог билетов</a> |
<a href = "Контакты.php" "#" class="menu">Контакты</a> |
<a href = "Мерч.php" "#" class="menu">Наш мерч</a> |
<a href = "admin_vhod.html" "#" class="menu">Для администраторов</a> |
</nav>


<body>
<div class="container">
  <img src="ff.jpg">
<form action="save_user.php" method="post">
  
	
    <label>Введите логин:<br></label>
    <div class="dws-input">
      <input type="text" name="login" placeholder="Введите логин">
    </div>


    <label>Введите пароль:<br></label>
   <div class="dws-input">
      <input type="password" name="password" placeholder="Введите пароль">
    </div>


	   <input class="dws-submit" type="submit" name="submit" value="Зарегистрироваться"><br />

</form>
</body>

</html>



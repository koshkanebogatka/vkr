<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style_pannel.css" type="text/css" />
<title style="color=black font-size=34pt">Смена пароля</title>
<meta charset="utf-8">
<nav>
</head>
<div class="header">
<br>
		<div class = "title">Режим администратора</div>
		<br>
		<div class = "menu" >

		<a href ="smen_pass.php" "#" class="knopka">Сменить пароль</a>
		<a href ="index.php" "#" class="knopka">Выйти</a>
		</div>
</div>
</nav>
<br><br><br>
<div class="content"></div>
<body background="f1.jpg">

<form action="pass.php" method="post">
<br><br><br><br>
<table width="400" alight=center>
<tr>
</tr>
<tr>
  <td alight=center>
<h1>Смена пароля</h1>
<p>Ваш логин:</p>
	<input name="login" type="text" size="15" maxlength="15">
<p>Старый пароль:</p>
	<input name="oldpassword" type="password" size="15" maxlength="15">
<p>Новый пароль:</p>
	<input name="newpassword" type="password" size="15" maxlength="15">
<p>Подтвердите пароль:</p>
	<input name="otherpassword" type="password" size="15" maxlength="15"><p></p>
<input type="submit" value="Изменить пароль">
	</td>
</tr>
</form>

</body>
</html>




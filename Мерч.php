
<?php
include "databas1.php";
?>

<!DOCTYPE html>
<html lang="ru">
<html>
<head>
	<meta charset=UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css" />
		<script src="script1.js" defer></script>
		<script src="script2.js" defer></script>
		<script src="script3.js" defer></script>
<title>Электрофорез</title>

<ul id="slides">
	<li class="slide showing"></li>
	<li class="slide"></li>
	<li class="slide"></li>
	<li class="slide"></li>
</ul>
</head>
<header>
<br/>
</header>

<nav> 
<a href = "index.php" "#" class="menu">О группе</a> |
<a href = "Новости.php" "#" class="menu">Новости</a> |
<a href = "Каталог билетов.php" "#" class="menu">Каталог билетов</a> |
<a href = "Контакты.php" "#" class="menu">Контакты</a> |
<a href = "Мерч.php" "#" class="menu">Наш мерч</a> |
<a href = "admin_vhod.php" "#" class="menu">Для администраторов</a> |
</nav>
<br>

<body>
<main style = "height:250px">
<h3> <a href="https://electroforez.store/" class="knopka" target="_blank">Перейти в ELECTROFOREZ.STORE</a></h3>
<br><br>
<?php
  $result=mysqli_query($induction,"select * from `merch` ");
  while ($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $name_m=$row['name_m'];
    $cena_m=$row['cena_m'];
    $img_m=$row['img_m'];
    ?>

<table width="600">
<tr>
<td><img width="90%" height="90%" src="<?php echo $img_m;?>"><br><br></td>
</tr>
<tr>
<th style="color = black; font-size: 22px;"><?php echo $name_m;?><br><br></th>
</tr>
<tr>
<td style="color = black; font-size: 18px;"><?php echo $cena_m;?></td>
</tr>
</table>
<br><br><br>
<?php
}
?>




</main>


</body>
<footer>
<span id="doc_time">
</span>
</footer>
</html>
</html>







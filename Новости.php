<?php
include "databas1.php";
include "databas2.php";
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


<body>
<h1><u>Новости</u></h1>

<?php
$result=mysqli_query($induction,"select * from `news` order by data_n desc");
	while ($row=mysqli_fetch_array($result)){

		$id=$row['id'];
		$name_n=$row['name_n'];	
		$data_n=$row['data_n'];
		$text_n=$row['text_n'];
		$img_n=$row['img_n'];
		?>
		<div><b><?php echo $name_n;?></b></div>
		<div><?php echo $text_n;?></div>
		<br><br>
		<div><img width="30%" height="30%" src="<?php echo $img_n;?>"></div> 
		<font color="#808080" size=3pt ><br><?php echo $data_n;?></font>
		<br><br><br>
		<p>-------------</p>
		<?php
}
?>	


</body>

<footer>
<span id="doc_time">
</span>
</footer>
</html> 
</html> 










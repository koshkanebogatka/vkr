<?php
    session_start();
	if (isset($_POST['name_m'])) { $name_m = $_POST['name_m']; if ($name_m == '') { unset($name_m);} } 
	if (isset($_POST['newimg_m'])) { $newimg_m = $_POST['newimg_m']; if ($newimg_m == '') { unset($newimg_m);} } 
	if (isset($_POST['newname_m'])) { $newname_m = $_POST['newname_m']; if ($newname_m == '') { unset($newname_m);} } 
	if (isset($_POST['newcena_m'])) { $newcena_m=$_POST['newcena_m']; if ($newcena_m =='') { unset($newcena_m);} }
	if (empty($name_m)) 
    {
		exit ("Введите текст новости, которую хотите отредактировать");
    }
	include ("databas1.php");
	include ("databas2.php");
	$result = mysqli_query($induction,"SELECT * FROM merch WHERE name_m='$name_m'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['name_m']))
    {
		exit ("Новость не найдена");
	}
	if (empty($newname_m) or empty($newcena_m)  or empty($newimg_m)) 
    {
		exit ("Заполнены не все поля");
    }
	$result2 = mysqli_query ($induction,"update merch set
	img_m='$newimg_m',
	name_m='$newname_m', 
	cena_m='$newcena_m'
	where name_m='$name_m'");

	header("Location: adm_regim.php");
 ?>
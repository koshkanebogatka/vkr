<?php
    session_start();
	
	if (isset($_POST['img_m'])) { $img_m = $_POST['img_m']; if ($img_m == '') { unset($img_m);} } 
	if (isset($_POST['name_m'])) { $name_m = $_POST['name_m']; if ($name_m == '') { unset($name_m);} } 

	if (isset($_POST['cena_m'])) { $cena_m=$_POST['cena_m']; if ($cena_m =='') { unset($cena_m);} }
if (empty($img_m) or empty($name_m) or empty($cena_m)) 
    {
    exit ("Заполнены не все поля");
    }
    include ("databas1.php");
    include ("databas2.php");
	
 $result = mysqli_query($induction, "SELECT id FROM merch WHERE name_m='$name_m'");
    $myrow1 = mysqli_fetch_array($result);
    if (!empty($myrow1['id'])) {
    exit ("Мерч с таким названием уже существует");
    }

	// если такого нет, то сохраняем данные
    $result2 = mysqli_query ($induction,"INSERT INTO merch (img_m, name_m, cena_m) VALUES( '$img_m', '$name_m', '$cena_m')");
	header("Location: adm_regim.php");
 ?>
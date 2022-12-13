<?php
    session_start();
if (isset($_POST['name_n'])) { $name_n = $_POST['name_n']; if ($name_n == '') { unset($name_n);} } 
    if (isset($_POST['text_n'])) { $text_n=$_POST['text_n']; if ($text_n =='') { unset($text_n);} }
	if (isset($_POST['img_n'])) { $img_n=$_POST['img_n']; if ($img_n =='') { unset($img_n);} }
	if (isset($_POST['data_n'])) { $data_n=$_POST['data_n']; if ($data_n =='') { unset($data_n);} }
if (empty($name_n) or empty($text_n) or empty($img_n) or empty($data_n)) 
    {
    exit ("Заполнены не все поля");
    }
	include ("databas1.php");
    include ("databas2.php");

 $result = mysqli_query($induction, "SELECT id FROM news WHERE name_n='$name_n'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Новость с таким названием уже существует");
    }
	$result2 = mysqli_query($induction, "SELECT id FROM news WHERE text_n='$text_n'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Такая новость уже существует");
    }
 
	//сначала убираем посторонние символы
	$test_data = preg_replace('/[^0-9\.]/u', '', trim($_POST['data_n']));
	//разбиваем дату в массив
	$test_data_ar = explode('.', $test_data);
	//если дата введена в корректном формате d.m.Y (checkdate(день месяц год))
	if(!@checkdate($test_data_ar[1], $test_data_ar[0], $test_data_ar[2])) {
	echo  '<br>Дата введена не корректно';
	}
	$date=strtotime($data_n);
	$date2 = date("Y-m-d", $date);
	// если такого нет, то сохраняем данные
    $result2 = mysqli_query ($induction,"INSERT INTO news (name_n, text_n, img_n, data_n) VALUES('$name_n','$text_n', '$img_n', '$date2')");
	header("Location: adm_regim.php");
 ?>
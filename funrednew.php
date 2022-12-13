<?php
    session_start();
	if (isset($_POST['name_n'])) { $name_n = $_POST['name_n']; if ($name_n == '') { unset($name_n);} } 
	if (isset($_POST['newname_n'])) { $newname_n=$_POST['newname_n']; if ($newname_n =='') { unset($newname_n);} }
	if (isset($_POST['newtext_n'])) { $newtext_n=$_POST['newtext_n']; if ($newtext_n =='') { unset($newtext_n);} }
	if (isset($_POST['newdata_n'])) { $newdata_n=$_POST['newdata_n']; if ($newdata_n =='') { unset($newdata_n);} }
	if (isset($_POST['newimg_n'])) { $newimg_n=$_POST['newimg_n']; if ($newimg_n =='') { unset($newimg_n);} }
	if (empty($name_n)) 
    {
		exit ("Введите название новости");
    }
	include ("databas1.php");
	include ("databas2.php");
	$result = mysqli_query($induction,"SELECT * FROM news WHERE name_n='$name_n'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['name_n']))
    {
		exit ("Новость не найдена");
	}
	if (empty($newname_n) or empty($newtext_n) or empty($newtext_n)) 
    {
		exit ("Заполнены не все поля");
    }
	//сначала убираем посторонние символы
	$test_data = preg_replace('/[^0-9\.]/u', '', trim($_POST['newdata_n']));
	//разбиваем дату в массив
	$test_data_ar = explode('.', $test_data);
	//если дата введена в корректном формате d.m.Y (checkdate(месяц, день, год))
	if(!@checkdate($test_data_ar[1], $test_data_ar[0], $test_data_ar[2])) {
	echo  '<br>Дата введена не корректно';
	}

	$date=strtotime($newdata_n);
	$date2 = date("Y-m-d", $date);
	
	
    $result2 = mysqli_query ($induction,"update news set
	name_n='$newname_n', 
	text_n='$newtext_n',
	img_n='$newimg_n',
	data_n='$date2'
	where name_n='$name_n'");
	header("Location: adm_regim.php");
?>

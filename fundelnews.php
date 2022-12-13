<?php
    session_start();
if (isset($_POST['name_n'])) { $name_n = $_POST['name_n']; if ($name_n == '') { unset($name_n);} } 
if (empty($name_n)) 
    {
    exit ("Введите название новости, которую хотите удалить");
    }
	include ("databas1.php");
    include ("databas2.php");
	
$result = mysqli_query($induction,"SELECT * FROM news WHERE name_n='$name_n'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['name_n']))
    {

    exit ("Новость не найдена");
	}
    else {
		$result2 = mysqli_query ($induction,"DELETE FROM news where name_n='$name_n'");
	}
	header("Location: adm_regim.php");
?>
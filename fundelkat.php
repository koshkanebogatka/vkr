<?php
    session_start();
if (isset($_POST['name_m'])) { $name_m = $_POST['name_m']; if ($name_m == '') { unset($name_m);} } 
if (empty($name_m)) 
    {
    exit ("Заполнены не все поля");
    }
    include ("databas1.php");
	include ("databas2.php");
	
$result = mysqli_query($induction,"SELECT * FROM merch WHERE name_m='$name_m'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['name_m']))
    {

    exit ("Название не найдено");
	}
    else {
		$result2 = mysqli_query ($induction,"DELETE FROM merch where name_m='$name_m'");
	}
	header("Location: adm_regim.php");
	
	if (isset($_POST['img_m'])) { $img_m=$_POST['img_m']; if ($img_m =='') { unset($img_m);} }
		if (isset($_POST['name_m'])) { $name_m=$_POST['name_m']; if ($name_m =='') { unset($name_m);} }
		$result = mysqli_query($induction,"SELECT * FROM merch WHERE name_m='name_m'");
		$list=array();
		while ($row=mysqli_fetch_array($result))
		{
		$list['newname_m']=$row['name_m'];
		$list['img_m']=$row['img_m'];
		$list['data_n']=$row['data_n'];
		}
	
?>
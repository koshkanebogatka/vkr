<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['oldpassword'])) { $oldpassword=$_POST['oldpassword']; if ($oldpassword =='') { unset($oldpassword);} }
	if (isset($_POST['newpassword'])) { $newpassword=$_POST['newpassword']; if ($newpassword =='') { unset($newpassword);} }
	if (isset($_POST['otherpassword'])) { $otherpassword=$_POST['otherpassword']; if ($otherpassword =='') { unset($otherpassword);} }
if (empty($login) or empty($oldpassword) or empty($newpassword) or empty($otherpassword)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Заполнены не все поля");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$oldpassword = stripslashes($oldpassword);
    $oldpassword = htmlspecialchars($oldpassword);
	$newpassword = stripslashes($newpassword);
    $newpassword = htmlspecialchars($newpassword);
	$otherpassword = stripslashes($otherpassword);
    $otherpassword = htmlspecialchars($otherpassword);	
//удаляем лишние пробелы
    $login = trim($login);
    $oldpassword = trim($oldpassword);
	$newpassword = trim($newpassword);
	$otherpassword = trim($otherpassword);
// подключаемся к базе
    include ("databas1.php");
	include ("databas2.php");
 
$result = mysqli_query($induction,"SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
	{
    //если пользователя с введенным логином не существует
		exit ("Неверный логин или пароль");
	}
    else 
	{
    //если существует, то сверяем пароли
		if ($myrow['password']==$oldpassword) 
		{ 
			if ($newpassword==$otherpassword)
			{
				//если пароли совпадают, то 
				$result2 = mysqli_query ($induction,"update users set password='$newpassword' where login='$login'");
				if ($result2=='TRUE')
				{
					echo "Пароль изменен <a href='index.php'>Главная страница</a>";
				}
					else 
				{
					echo "Ошибка";
				}
			}
				else 
				{
					//если пароли не сошлись
					exit ("Неверный логин или пароль");
				}
					
		}
		else 
		{
			//если пароли не сошлись
			exit ("Неверный логин или пароль");
		}
		}
		
	
 ?>
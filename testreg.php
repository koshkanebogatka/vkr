<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то 
    {
    exit ("Заполнены не все поля");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("databas1.php");
    include ("databas2.php");
	$result = mysqli_query($induction,"SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Неверный логин или пароль");
    }
    else {

    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    //echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
	header("Location: adm_regim.php");
    }
 else {
    //если пароли не сошлись

    exit ("Неверный логин или пароль");
    }
    }
    ?>
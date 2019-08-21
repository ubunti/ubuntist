<html>
<body>
<!-- Это форма авторизации: -->
<form action='index.php' method='POST'>
    <input name='login'><br>
    <input name='password' type='password'><br>
    <input type='submit' value='Отправить'>
</form>
<!-- Конец формы авторизации. -->
</body>
</html>
<?php
require_once 'connection.php';
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)or die("Ошибка " . mysqli_error($link));
// экранирования символов для mysql
$login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
$password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));

//Если форма авторизации отправлена...
if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
    //Пишем логин и пароль из формы в переменные (для удобства работы):
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    /*
        Формируем и отсылаем SQL запрос:
        ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
    */
    $query = 'SELECT*FROM users WHERE login="'.$login.'" AND password="'.$password.'"';
    $result = mysqli_query($link, $query); //ответ базы запишем в переменную $result
    $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

    //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
    if (!empty($user)) {
        //Пользователь прошел авторизацию, выполним какой-то код.
        echo 'Привет, '.$_SESSION['login'];    } else {
        //Пользователь неверно ввел логин или пароль, выполним какой-то код.
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Как с помощью PHP и MySQL создать систему регистрации и авторизации пользователей</title>
    <link href="style.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='css'>
</head>
<body>
<?php
// Соединямся с БД
$link = mysqli_connect("localhost", "php", "Qwe123_!z", "base1");

if (isset($_POST['submit'])) {
    $err = [];

// проверям логин
    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

// проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='" . mysqli_real_escape_string($link, $_POST['login']) . "'");
    if (mysqli_num_rows($query) > 0) {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

// Если нет ошибок, то добавляем в БД нового пользователя
    if (count($err) == 0) {

        $login = $_POST['login'];

// Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link, "INSERT INTO users SET user_login='" . $login . "', user_password='" . $password . "'");
        header("Location: login.php");
        exit();
    } else {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach ($err AS $error) {
            print $error . "<br>";
        }
    }
}
?>
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="post" name="registerform">
            <p><label for="user_login">Полное имя<br>
                    <input class="input" id="full_name" name="full_name" size="32" type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32" type="email" value=""></label></p>
            <p><label for="user_pass">Имя пользователя<br>
                    <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password" size="32" type="password" value=""></label></p>
            <p class="submit"><input class="button" id="register" name="register" type="submit"
                                     value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href="login.php">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>
<footer>
    футер
</footer>
</body>
</html>

<html>
<body>
<?php
/*$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];*/
/*print_r($login);
print_r($email);
print_r($password);
print_r($name);*/
require_once 'connection.php';
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)or die("Ошибка " . mysqli_error($link));
// экранирования символов для mysql
$login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
$email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
$password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));

// создание строки запроса
$query = "INSERT INTO users1 VALUES(NULL, '$login','$email','$name','$password')";

// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    echo "<span style='color:blue;'>Данные добавлены</span>";
}

?>
<form action="" method="post">
    Login: <input type="text" name="login"><br>
    E-mail: <input type="text" name="email"><br>
    Имя: <input type="text" name="name"><br>
    Пароль: <input type="password" name="password"><br>
    <p><input name="submit" type="submit" id="submit" value="Зарегистрироваться" /></form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт
require_once 'Connect.php';

if(isset($_POST['name']) && isset($_POST['company'])){
    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $company = htmlentities(mysqli_real_escape_string($link, $_POST['company']));

    // создание строки запроса
    $query ="INSERT INTO tovars VALUES(NULL, '$name','$company')";

    // выполняемd запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<h2>Добавить новую модель</h2>
<form method="POST">
    <p>Введите модель:<br>
        <input type="text" name="name" /></p>
    <p>Производитель: <br>
        <input type="text" name="company" /></p>
    <input type="submit" value="Добавить">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));



// если запрос POST
if(isset($_POST['name']) && isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['id'])){

    $id = htmlentities(mysqli_real_escape_string($link, $_POST['id']));
    $login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));

    $query ="UPDATE users1 SET name='$name', login='$login' , email='$email', password='$password' WHERE id='$id'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
}

// если запрос GET
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
{
    $id = (int)$_GET['id'];

    // создание строки запроса
    $query ="SELECT * FROM users1 WHERE id = '$id'";
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //если в запросе более нуля строк
    if($result && mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_row($result); // получаем первую строку
        $name = $row[1];
        $company = $row[2];

        echo "<h2>Изменить данные</h2>
            <form method='POST'>
            <input type='hidden' name='id' value='$id' />
            <p>Введите логин:<br> 
            <input type='text' name='name' value='$name' /></p>
            <p>емеил: <br> 
            <input type='text' name='login' value='$login' /></p>
            <p>Имя: <br> 
            <input type='text' name='email' value='$email' /></p>
            <p>пароль: <br> 
            <input type='text' name='password' value='$password' /></p>
            <input type='submit' value='Сохранить'>
            </form>";

        mysqli_free_result($result);
    }
}
// закрываем подключение
mysqli_close($link);
?>
</body>
</html>

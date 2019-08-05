<html>
<head>
    <title>Запись в БД через форму на php</title>
</head>
<body>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Имя"/>
    <input name="text" type="text" placeholder="Текст"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
if (isset($_POST['name']) && isset($_POST['text'])) {

    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "php"; // Логин БД
    $db_password = "Qwe123_!z"; // Пароль БД
    $db_base = 'base1'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД

    // Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $result = $mysqli->query("INSERT INTO " . $db_table . " (name,text) VALUES ('$name','$text')");

    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
?>
</body>
</html>
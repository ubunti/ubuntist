<?php
$host = 'localhost'; // адрес сервера
$database = 'base2'; // имя базы данных
$user = 'php'; // имя пользователя
$password = 'Qwe123_!z'; // пароль
//require_once './Connect.php';
$db = new Connect($user, $password, $database);

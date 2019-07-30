<?php

class User{

    public $login, $password, $email, $created_at;

    function __construct($login, $password, $email, $created_at)
    {
        $this->$login = $login;
        $this->$password = $password;
        $this->$email = $email;
        $this->$created_at = $created_at;
    }
//далее проверка на валидность данных о юзере, и
//если валидны отсылка к методу insertUser()
//если нет, выдаем сообщение

    function insertUser()
    {
        $sql = "INSERT INTO users SET login = '$login', email = '$email', password = '$password', created_at = '$created_at';";
        $link = mysqli_connect("localhost", "php", "Qwe123_!z", "base1");
        $query = mysqli_query($link, $sql);
        if ($query) {
            echo 'ok';
        } else {
            echo 'loose';
            echo mysqli_error($link);
        }
    }
    ?>
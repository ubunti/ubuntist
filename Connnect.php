<?php

class Connnect
{

    public $link;

    public function __construct($host, $user, $password, $database)
    {
        $this->$host = $host;
        $this->$user = $user;
        $this->$password = $password;
        $this->$database = $database;

    }


    public function connect()
    {
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
    }
}
?>
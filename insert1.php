<?php

class connnect
{

    public $link;

    function __construct($host, $user, $password, $database)
    {
        $this->$host = $host;
        $this->$user = $user;
        $this->$password = $password;
        $this->$database = $database;

    }


    function insertconnect()
    {
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
    }
}
?>
<?php

class Connnect
{

    public $link;

    public function __construct($user, $password, $database, $host = 'localhost')
    {
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $this->link = $link;
        $this->$user = $user;
        $this->$password = $password;
        $this->$database = $database;

    }

    public function query()
    {
        return mysqli_query($this->link, $query) or die("Ошибка " . mysqli_error($this->link));
    }
}
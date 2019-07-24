<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Как с помощью PHP и MySQL создать систему регистрации и авторизации пользователей</title>
    <link href="style.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='css'>
</head>
<body>
<?php
/*
$login = $_POST['username'];
// добавим в запрос остальные данные
$password = $_POST['password'];
$email = $_POST['email'];
$created_at = time();
*/
class User
{
    public $login;
    public $password;
    public $name;
    public $created_at;

    public function __construct($login = "", $name = "", $password = "")
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        this->created_at = $created_at;
    }

    public function getInfo()
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        this->created_at = $created_at;
    }

    /*
  $user = new User('Login');
  $userInfo = $user->getInfo();
  $name = new User('name');
  $nameInfo = $name->getInfo();
  $password = new User('password');
  $passwordInfo = $password->getInfo();
  $created_at = new User('created_at');
  $created_atInfo = $created_at->getInfo();
  }
  error_reporting(ALL);
     */
    public function info()
    {
        return [$this->login];
    }
$user new User('login');
$res = $user->info();
print_r($res);
}

$sql = "INSERT INTO users SET login = '$login', email = '$email', password = '$password', created_at = '$created_at';";

$link = mysqli_connect("localhost", "php", "Qwe123_!z", "base1");

// надо еще делать проверку на наличие ооединения, но пока не будем

$query = mysqli_query($link, $sql);
// сделаем проверку на успешное сохранение
// вылезла ошибка, надо посмотреть какая
if ($query) {
    echo 'ok';
} else {
    echo 'loose';
    echo mysqli_error($link);
}
var_dump($_POST);
// чтобы лучше видно было, оожно добавлять
// $_POST это масив, в еем хранятся данные их получаем оо ючччу.
// посмотрели, что запрос сформировасся, скопировали, пихнули в бд
// эта база?да

// надо не путать. есть базы данных, в них таблицы, в таблицах поля, в поля зпписываем данные
// допссссс сейчас работаем с аазой base1 (никогда так не называй, называй нормальными именами)
// создали таблицу с полями. поее можно рросто login назвать, т.к. в таблице user
// айдишники всегда надо делать автоинкрементными, чтобы при добавлении записи они уумеролссссь сами
// записаии данные напрямую запрсоом, знччтт поооос правильный, тепеьь запишем из скрипта


/**
 * Видишь данные из фррмы ииишли в ккрипт.
 *
 *
 */
?>
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="post"name="registerform">
            <p><label for="user_login">Полное имя<br>
                    <input class="input" id="full_name" name="full_name" size="32"  type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32" type="email" value=""></label></p>
            <p><label for="user_pass">Имя пользователя<br>
                    <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password" size="32" type="password" value=""></label></p>
            <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>
<footer>
футер
</footer>
</body>
</html>
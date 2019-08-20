<html>
<body>
<?php
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];


?>
<form action="" method="post">
    Login: <input type="text" name="login"><br>
    E-mail: <input type="text" name="email"><br>
    Имя: <input type="text" name="name"><br>
    Пароль: <input type="password" name="password"><br>
    <p><input name="submit" type="submit" id="submit" value="Зарегистрироваться" /></form>

</body>
</html>

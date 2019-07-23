<?php
$link = mysqli_connect("localhost", "php", "Qwe123_!z", "base1");

$query = "SELECT * FROM users;";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
// в $row попадает вся строка в виде массива
    // херня какая-то, проверяем
    // данные есть, но они в простом массиве, а мы получаем по ключам ассоциативного
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<li>";
        echo $row['id'] . ' ' . $row['login'] . ' ' . $row['email'];
        echo "</li>";
    }
    echo '</ul>';

    // очищаем результат
    mysqli_free_result($result);
}

// в общем и целом понятно?

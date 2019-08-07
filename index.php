<?php
    $h = date('H');
    $img = (int)($h/6);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        {
        background: url(img/<?php echo $img ?>.ipeg);
        background-size: cover;
        color: #ff0;
        }
    </style>
</head>
<body>
<h1></h1><?php echo $h ?></h1>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<li><a href="/home">Главная</a></li>
<br>

<?php
foreach ($data as $row) {
    echo '<br>';
    foreach ($row as $row2) {
        echo $row2. "|";
    }
    echo '<br>';
}
?>

</body>
</html>


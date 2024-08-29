<?php
require __DIR__ . '/classes/Table.php';
require __DIR__ . '/classes/Cabinet.php';
//setcookie('username', 'admin');
//setcookie('secret', sha1('13.04.1980'));
$users = require_once __DIR__ . '/users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documf</title>
</head>
<body>
    
    <h1>"hello"</h1>
    <p><b>Функция суммы 10 и 20</b></p>
    <?php 
        include __DIR__ . '/functions.php';
        echo sum(10, 20);
    ?>
    <p><b>Форма запроса для отправки картинки и обработки в upload.php  и сохранение картинки в папку pictures</b></p>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type='file' name="picture">
        <button type="submit">Отправить</button>
    </form>
    <p><b>Количество секунд с 01.01.1970</b></p>
    <?php
    echo time();
    ?><br>
    <p><b>Сессии</b></p>
    <a href="test.php">TEST</a><br>
    <p><b>Хеш функциии и безопасность</b></p>
    <?php
    //$password = '123456';
    //echo password_hash($password, PASSWORD_DEFAULT);
    $db = '$2y$10$WYOCpEKmu6AlL6e8qL8xru1OUrPm2YqpKEVpHQiY1VdnGXmAiPX6W';
    $password = '123456';
    var_dump(password_verify($password, $db));
    ?>
    <p><b>Объектно-ориентированное программирование</b></p>

    <?php
    $table1 = new Table;
    $table1-> color = 'red';
    $table1-> legs = 4;
    $table1-> price = 1000;
//    $table1-> setPrice(1000);
 
    echo $table1->show();

    $table2 = new Table;
    $table2-> color = 'red';
    $table2-> legs = 4;
    $table2-> price = 2000;
//    $table2-> setPrice(2000);

    echo $table2->show();

    $cab = new Cabinet;
    $cab-> doors = 2;
    $cab-> price = 5000;

    echo $cab->show();
    ?>
</body>
</html>
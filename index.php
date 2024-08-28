<?php
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

    <?php
    echo time();
    ?><br>

    <a href="test.php">TEST</a><br>

    <?php
    //$password = '123456';
    //echo password_hash($password, PASSWORD_DEFAULT);

    $db = '$2y$10$WYOCpEKmu6AlL6e8qL8xru1OUrPm2YqpKEVpHQiY1VdnGXmAiPX6W';
    $password = '123456';


    var_dump(password_verify($password, $db));
    ?>
</body>
</html>
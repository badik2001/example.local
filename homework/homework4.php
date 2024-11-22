<?php

include_once __DIR__ . '/functions.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homowork 4</title>
</head>
<body>
    <h2>Exersice 1</h2>
    <?php
    echo getGuestBook()
    ?>
    <br>
    <form action="test.php" method="POST">
        <fieldset>
            <legend>Контактная информация</legend><br>
            <label>Фамилия <input type="text" name="first_name" required></label><br>
            <label>Имя <input type="text" name="second_name" required></label><br>
            <label>Отчество <input type="text" name="last_name" required></label><br>
            <button>Отправить</button>
        </fieldset>
    </form>
</body>
</html>
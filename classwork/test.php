<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">INDEX</a>
    <br>    
    <?php
    $text1 = $_POST["first_name"];
    $text2 = $_POST["second_name"];
    $text3 = $_POST["last_name"];
    $file = fopen("guests.txt",'a+'); //открываем файл для дозаписи
    ?><br><?php
    fwrite($file, ' '.$text1.' '.$text2.' '.$text3); //объединяем строки с помощью точки(в php это так делается)
    fclose($file);

    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<?php

// проверяем передаётся ли что нибудь в GET
if (empty($_GET)) {
    return 'Ничего не передано!';
}
// проверяем передаётся ли операция
if (empty($_GET['operation'])) {
    return 'Не передана операция';
}
// проверяем пуст ли хотя бы один агрумент
if (empty($_GET['first_number']) || empty($_GET['second_number'])) {
    return 'Не переданы аргументы';
}
// создаём переменные первого и второго числа значение берём из пераметра name в input в homework3.php
$first_number = $_GET['first_number'];
$second_number = $_GET['second_number'];
// собираем строку из полученных чисел и знака операции
$expression = $first_number . ' ' . $_GET['operation'] . ' ' . $second_number . ' = ';
// выбираемзнак операции
switch ($_GET['operation']) {
    case '+':
        $result = $first_number + $second_number;
        break;
    case '-':
        $result = $first_number - $second_number;
        break;
    case '*':
        $result = $first_number * $second_number;
        break;
    case '/':
        $result = $first_number / $second_number;
        break;
    default:
        return 'Операция не поддерживается';
}
// возвращаемвыражение полученное и результат высчитанный
echo $expression . $result;
?>
</body>
</html>


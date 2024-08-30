<?php 

require_once __DIR__ . '/classes/GuestBookRecord.php';

function sum($x, $y)
{
    return $x + $y;
}

function discriminant($a, $b, $c)
{
    return ($b**2)-(4*$a*$c);
}

function root1($a, $b, $c)
{
    return (-$b + sqrt(discriminant($a, $b, $c)))/(2*$a);
}
function root2($a, $b, $c)
{
    return (-$b - sqrt(discriminant($a, $b, $c)))/(2*$a);
}

function sendMessage(User $user, string $message)
{
    echo $user->email . '->' . $message;
}

function getGuestBookRecords() 
{
    $lines =  file(__DIR__ . '/data.txt', FILE_IGNORE_NEW_LINES);
    $ret = [];
    foreach ($lines as $line) {
        $ret[] = new GuestBookRecords($line);
    }
    return $ret;
}

function getGuestBook() {
    // Получаем содержимое файла в виде массива. Обращаемся
    // по HTTP-протоколу, чтобы получить HTML-код с удалённого сервера
    $lines = file(__DIR__ . '/guests.txt', FILE_IGNORE_NEW_LINES);

    // Обходим элементы массива и выводим содержимое как HTML-код с номерами строк
    foreach ($lines as $line_num => $line) {
        echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    }
}

assert(3 === sum(1, 2));
assert(256 === discriminant(3, -4, -20));
assert(-4 == root2(1, 3, -4));
assert(1 == root1(1, 3, -4));
?>


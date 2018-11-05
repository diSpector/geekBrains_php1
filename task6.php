<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action = 'index.php'>
<?php
//6. *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

// получение введенных пользователем данных
$baseNum = (int)$_POST['baseNum'];
$exponentNum = (int)$_POST['exponentNum'];
echo $baseNum . "<sup>$exponentNum</sup> = " . exponentiation($baseNum, $exponentNum);

// функция для возведения в степень, использующая рекурсию
function exponentiation($base, $exponent){
    switch($exponent){ // дальнейшие расчеты в зависимости от введенной степени
        case 0:
            return 1; // если введен ноль, итог равен 1
            break;
        case ($exponent >= 1): // если степень больше или равна 1, то происходит умножение числа на само себя с помощью рекурсии
            return $base * exponentiation($base, $exponent - 1); // если степень больше единицы, рекурсивно вызывать функцию
            break;
        case ($exponent < 0): // если степень отрициательна, то берется "обратное число" и возводится в "модуль степени" - в соответствии с правилами математики
            return (1/$base) * exponentiation(1/$base, (-$exponent) - 1); // если степень больше единицы, рекурсивно вызывать функцию
            break;
        default:
            return 'Ошибка ввода';
    }
}
?>
    <input type="submit" value="Вернуться">
</form>
</body>
</html>

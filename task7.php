<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

$dateNow = $_POST['dateNow']; // получение значения текущего времени из формы задания
$dateArr = explode(':', $dateNow); // получение массива вида [часы, минуты] по разделителю ":", т.к. время приходит в таком формате
$hours = (int)$dateArr[0]; // получение из массива часов
$minutes = (int)$dateArr[1]; // получение из массива минут

// склонения часов и минут
$arrayMins = ['минут', 'минута', 'минуты'];
$arrayHours = ['часов', 'час', 'часа'];

// функция склонения - получает на вход значение времени (часы или минуты), а также массив склонений. На выходе - значение времени + выполненное склонение
function ending($num, $arrayOfEndings){
        // если число равно 2,3,4,22,23,24,32,33,34,42,43,44,52,53,54
        if (((($num % 10) == 2) || (($num % 10) == 3) || (($num % 10) == 4)) && ( ($num != 12) || ($num != 13) || ($num != 14))){
            $correctEnding = $arrayOfEndings[2];
            // если число равно 1,21,31,41,51
        } else if ((($num % 10) == 1) && ($num != 11)) {
            $correctEnding = $arrayOfEndings[1];
            // все остальные значения - 0,5...20,25...30,35...40,45...50,55...59
        } else {
            $correctEnding = $arrayOfEndings[0];
            }
    return $num . " " . $correctEnding . " "; // результат работы функции
}

// подсчет итогового результата
$totalDate = ending($hours, $arrayHours) . ending($minutes, $arrayMins);

// ниже вывод результата в форму
?>
<form action = 'index.php'>
    <h3><?php echo $totalDate; ?></h3>
    <input type="submit" value="Вернуться">


</form>
</body>
</html>

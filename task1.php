<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
// Затем написать скрипт, который работает по следующему принципу:
//    если $a и $b положительные, вывести их разность;
//    если $а и $b отрицательные, вывести их произведение;
//    если $а и $b разных знаков, вывести их сумму;
//ноль можно считать положительным числом.

// получение значений 2 переменных введенных в форму задания
$valueA = intval($_POST['varA']);
$valueB = intval($_POST['varB']);

if (($valueA >= 0) && ($valueB >= 0)) { // если оба числа положительные (больше либо равны нулю), посчитать разность
    $operation = 'Вычитание';
    $result = $valueA - $valueB;
}
if (($valueA < 0) && ($valueB < 0)) { // если оба числа отрицательные (меньше нуля), посчитать произведение
    $result = $valueA * $valueB;
    $operation = 'Произведение';
}
if ((($valueA >= 0) && ($valueB < 0)) || (($valueA < 0) && ($valueB >= 0))) { // если оба числа разных знаков, посчитать сумму.
    $result = $valueA + $valueB;
    $operation = 'Сложение';
}
// ниже вывод результатов задания
?>
<form action="index.php" method = "post">
    <h3>Результат</h3>
    Переменная a:
    <input type="text" name="varA" readonly value="<?php echo $valueA ?>">
    Переменная b:
    <input type="text" name="varB" readonly value = "<?php echo $valueB ?>">
    Операция:
    <input type="text" name="operation" readonly value="<?php echo $operation ?>">
    Результат:
    <input type="text" name="result" readonly value="<?php echo $result ?>">
    <input type="submit" value="Вернуться">

</form>
</body>
</html>
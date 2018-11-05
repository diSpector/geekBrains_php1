<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

// реализация 4 функций (сложение, вычитане, умножение, деление) для задания 3
function addition($num1, $num2){
    return $num1 + $num2;
}

function subtraction($num1, $num2){
    return $num1 - $num2;
}

function multiplication($num1, $num2){
    return $num1 * $num2;
}

function division($num1, $num2){
    if ($num2 != 0){ // проверка на деление на ноль
        return $num1 / $num2;
    }
    return 'Ошибка! Деление на ноль';
}

// реализация обшей функции для задания 4
function getTotalRes($num1, $num2, $operation){
    switch($operation){ // выбор дальнейшего действия (одной из 4 функций) в зависимости от выбранной математической операции
        case 'sum':
            $totalRes = addition($num1, $num2);
            break;
        case 'sub':
            $totalRes = subtraction($num1, $num2);
            break;
        case 'mult':
            $totalRes = multiplication($num1, $num2);
            break;
        case 'div':
            $totalRes = division($num1, $num2);
            break;
        default:
            $totalRes = 'Ошибка расчета';
    }
    return $totalRes;
}

// получение значений 2 переменных и операции, введенных в форму задания
$var1ForTask34 = (int)$_POST['var1ForTask34'];
$var2ForTask34 = (int)$_POST['var2ForTask34'];
$mathOperation = $_POST['mathOperation'];

// извлечение текста названия операции для итоговой формы задания
switch($mathOperation){
    case 'sum':
        $operationToText = 'Сложение';
        break;
    case 'sub':
        $operationToText = 'Вычитание';
        break;
    case 'mult':
        $operationToText = 'Умножение';
        break;
    case 'div':
        $operationToText = 'Деление';
        break;
    default:
        $operationToText = 'Неизвестная операция';
}
// ниже вывод итоговой формы результатов
?>
<form action="index.php" method = "post">
    <h3>Результат</h3>
    Число 1:
    <input type="text" name="varA" readonly value="<?php echo $var1ForTask34 ?>">
    Число 2:
    <input type="text" name="varB" readonly value = "<?php echo $var2ForTask34 ?>">
    Операция:
    <input type="text" name="operation" readonly value="<?php echo $operationToText ?>">
    Результат:
    <input type="text" name="result" readonly value="<?php echo getTotalRes($var1ForTask34, $var2ForTask34, $mathOperation) ?>">
    <input type="submit" value="Вернуться">
</form>

</body>
</html>
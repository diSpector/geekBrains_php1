<?php
//4. *[ чуть-чуть алгоритмов ] Напишите функцию, проверяющую пересекаются ли отрезки.
// Входные параметры: array $a и array $b, каждый с 2-мя элементами, обозначающими начальную и конечную координату отрезка.
// Выходной параметр boolean - если пересекаются true, если нет false.
// Пример: [2,6] и [4, 8] - отрезки пересекаются, а [1, 4] и [5, 8] - нет.

// алгоритм - сначала оба массива сортируются по возрастанию
$termA = [(int)$_POST['A1'], (int)$_POST['A2']];
sort($termA);
$termB = [(int)$_POST['B1'], (int)$_POST['B2']];
sort($termB);

// алгоритм функции - из 2 массивов определяется тот, у которого первый элемент наименьший.
// затем проверяется, лежит ли первый элемент другого массива между первым и вторым элементом первого (наименьшего) массива
function isContain($arr1, $arr2){
    if($arr1[0] < $arr2[0]){
        $min = $arr1;
        $max = $arr2;
    } else {
        $min = $arr2;
        $max = $arr1;
    }
    return (($max[0] >= $min[0]) && ($max[0] <= $min[1]));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="task4.php" method="post">
    <h3>Результат</h3>
    Отрезок 1: <?php echo "[$termA[0], $termA[1]]"?> <br>
    Отрезок 2: <?php echo "[$termB[0], $termB[1]]"?> <br>
    Отрезки <?php echo isContain($termA, $termB) ? '':'НЕ' ?> пересекаются
    <input type="submit" value="Вернуться">
</form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// контроллер - в зависимости от полученного номера задания из формы на Главной странице,
// подключает форму, соответствующую конкретному задаиню

$taskNum = $_POST['select']; // номер задания, полученный из формы на Главной странице
switch ($taskNum){
    case '1':
    ?>
        <form action="task1.php" method="post">
            <h3>Введите значения в форму</h3>
            Переменная a:
            <input type="text" name="varA">
            Переменная b:
            <input type="text" name="varB">
            <input type="submit" value="Посчитать">
        </form>
        <?php
        break;
    case '2':
    ?>
        <form action="task2.php" method="post">
            <h3>Введите целое число от 0 до 15:</h3>
            <input type="text" name="varFrom0To15">
            <input type="submit" value="Вывести результат">
        </form>
    <?php
        break;
    case '34':
    ?>
        <form action="task34.php" method="post">
            <h3>Введите числа и выберите операцию</h3>
            Число 1:
            <input type="text" name="var1ForTask34">
            Число 2:
            <input type="text" name="var2ForTask34">
            Операция:
            <select name = "mathOperation">
                <option value="sum">Сложение</option>
                <option value="sub">Вычитание</option>
                <option value="mult">Умножение</option>
                <option value="div">Деление</option>
            </select>
            <input type="submit" value="Посчитать">
        </form>
    <?php
        break;
    case '5':
        // для задания 5 не используется отдельный файл, т.к. для него не требуется пользовательский ввод
        ?>
        <form action="index.php" method="post">
            <h3>Год - <?php echo date('Y'); ?></h3>
            <input type="submit" value="Вернуться">
        </form>
        <?php
        break;
    case '6':
        ?>
        <form action="task6.php" method="post">
            <h3>Введите числа для возведения в степень</h3>
            Основание степени:
            <input type="text" name="baseNum">
            Показатель степени:
            <input type="text" name="exponentNum">
            <input type="submit" value="Посчитать">
        </form>
        <?php
        break;
    case '7':
        ?>
        <form action="task7.php" method="post">
            <h3>Текущее время:</h3>
                <input type="text" name="dateNow" value = "<?php echo date('G : i', time() + 3* 3600)?>">
            <input type="submit" value="Пересчитать">
        </form>
        <?php
        break;
        } ?>
</body>
</html>
